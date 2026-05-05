@extends('admin.layouts.main')
@section('title') Dashboard | Home Accreditation @endsection

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
                        <form action="{{ route('accreditation.update', $data->id) }}" method="POST">
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
                              Add New</button>
                          </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Logo</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                @php $a = 1; @endphp
                                @foreach ($images as $img)
                                <tr>
                                    <td>{{ $a }}</td>
                                    <td><img style="width:50%;" src="{{ asset('images/accreditation/' . $img->logo) }}" alt=""></td>
                                    <td>{{ $img->title }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary edit-btn2" 
                                            data-id="{{ $img->id }}" 
                                            data-title="{{ $img->title }}" 
                                            data-description="{{ $img->content }}" 
                                            data-logo="{{ $img->logo }}" 
                                            data-toggle="modal" 
                                            data-target="#editModal">
                                                <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" class="btn btn-danger delete-btn" data-url="{{ route('admin.accreditation.destroy', $img->id) }}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @php $a++; @endphp
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Section 3 Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('accreditation.section3.update', $data->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Section 3 Title</label>
                                <input name="section_3_title" type="text" value="{{ $data->section_3_title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Card 1 Title</label>
                                <input name="section_3_card_1_title" type="text" value="{{ $data->section_3_card_1_title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section_3_card_1_description" class="form-control">{{ $data->section_3_card_1_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Card 2 Title</label>
                                <input name="section_3_card_2_title" type="text" value="{{ $data->section_3_card_2_title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section_3_card_2_description" class="form-control">{{ $data->section_3_card_2_description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Card 3 Title</label>
                                <input name="section_3_card_3_title" type="text" value="{{ $data->section_3_card_3_title }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section_3_card_3_description" class="form-control">{{ $data->section_3_card_3_description }}</textarea>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

 <!-- Modal with form -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="formModal">Team</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('accreditation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="image-upload" id="image-label">Logo *</label>
              <input type="file" name="image" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Title *</label>
              <input name="title" type="text" value="" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Content *</label>
              <textarea name="content" class="form-control" id="editor" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>



  <!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Accreditation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form action="{{ route('admin.accreditation.content.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <!-- Hidden ID Field -->
                    <input type="hidden" name="id" id="edit-id">

                    <!-- Logo Preview -->
                    <div class="form-group">
                        <label>Current Logo</label><br>
                        <img id="current-logo" src="" alt="Logo" style="max-width: 150px; border-radius: 8px;">
                    </div>

                    <!-- Logo Upload -->
                    <div class="form-group">
                        <label for="edit-logo">Change Logo</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <!-- Title -->
                    <div class="form-group">
                        <label>Title *</label>
                        <input name="title" id="edit-title" type="text" class="form-control" required>
                    </div>

                    <!-- CKEditor Content -->
                    <div class="form-group">
                        <label>Content *</label>
                        <textarea name="description" class="form-control" id="edit-editor" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>







  
  <!-- Include CKEditor script -->
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
  

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
                                Swal.fire("Deleted!", "Accreditation has been deleted.", "success")
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