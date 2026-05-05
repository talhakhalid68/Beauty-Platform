@extends('admin.layouts.main')
@section('title') Dashboard | Home Slider @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Section Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('community.update', $data->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" type="text" value="{{ $data->title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{ $data->description }}</textarea>
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
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Add Team</button>
                          </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                                @php $a = 1; @endphp
                                @foreach ($images as $img)
                                <tr>
                                    <td>{{ $a }}</td>
                                    <td><img style="width:50%;" src="{{ asset('images/Team/' . $img->image) }}" alt=""></td>
                                    <td>{{ $img->name }}</td>
                                    <td>{{ $img->country }}</td>
                                    <td>
                                        <a href="#" class="btn btn-danger delete-btn" data-url="{{ route('team.destroy', $img->id) }}">Delete</a>
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

 <!-- Modal with form -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="formModal">Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="image-upload" id="image-label">Profile Image *</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label>Name *</label>
                    <input name="name" type="text" value="" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Country *</label>
                    <input name="country" type="text" value="" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
            </form>        
        </div>
    </div>
    </div>
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
                            body: JSON.stringify({ _token: csrfToken }) 
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                Swal.fire("Deleted!", "Team Member been deleted.", "success")
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