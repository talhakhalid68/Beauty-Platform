@extends('admin.layouts.main')
@section('title') Dashboard | Home Slider @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Slider Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.slider.update') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Slider Title</label>
                                <input name="title" type="text" value="{{$data->title}}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" required>{{$data->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Button Name</label>
                                <input name="button_name" value="{{$data->button_name}}" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Button Link</label>
                                <input name="button_link" type="text" value="{{$data->button_link}}" class="form-control" required>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Image Upload Section -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Image Upload</h4>
                        <div id="image-preview" class="image-preview">
                            <label for="image-upload" id="image-label">Choose File</label>
                            <input type="file" name="image" id="image-upload" onchange="uploadImage()" />
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                @php $a = 1; @endphp
                                @foreach ($images as $img)
                                <tr>
                                    <td>{{ $a }}</td>
                                    <td><img style="width:10%;" src="{{ asset('images/slider/' . $img->path) }}" alt=""></td>
                                    <td>
                                        <a href="#" class="btn btn-danger delete-btn" data-url="{{ route('slider.image.destroy', $img->id) }}">Delete</a>
                                    </td>
                                </tr>
                                @php $a++; @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Image Upload Script -->
<script>
    function uploadImage() {
        let formData = new FormData();
        let fileInput = document.getElementById("image-upload").files[0];

        if (!fileInput) {
            iziToast.warning({
                title: 'Warning!',
                message: "Please select an image.",
                position: 'topRight'
            });
            return;
        }

        formData.append('image', fileInput);
        formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute("content"));

        fetch("{{ route('slider.image.upload') }}", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                iziToast.success({
                    title: 'Success!',
                    message: data.message,
                    position: 'topRight'
                });
                setTimeout(() => location.reload(), 2000);
            } else {
                iziToast.error({
                    title: 'Error!',
                    message: "Upload failed. Please try again.",
                    position: 'topRight'
                });
            }
        })
        .catch(error => {
            iziToast.error({
                title: 'Error!',
                message: "An error occurred. Please check the file format and size.",
                position: 'topRight'
            });
        });
    }
</script>

<!-- SweetAlert2 for Delete Confirmation -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".delete-btn").forEach(button => {
            button.addEventListener("click", function (e) {
                e.preventDefault();
                let url = this.getAttribute("data-url");
                let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

                if (!url) {
                    console.error("Delete URL not found!");
                    return;
                }

                Swal.fire({
                    title: "Are you sure?",
                    text: "This action cannot be undone!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        fetch(url, {
                            method: "DELETE",
                            headers: {
                                "X-CSRF-TOKEN": csrfToken,
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({ _token: csrfToken }) // Ensure CSRF is sent in body
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Your image has been deleted.", "success")
                                    .then(() => location.reload());
                            } else {
                                Swal.fire("Error!", data.message || "Something went wrong.", "error");
                            }
                        })
                        .catch(error => {
                            Swal.fire("Error!", "Could not delete the image. Please try again.", "error");
                            console.error("Fetch error:", error);
                        });
                    }
                });
            });
        });
    });
</script>

@endsection