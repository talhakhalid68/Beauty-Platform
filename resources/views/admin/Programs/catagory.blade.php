@extends('admin.layouts.main')
@section('title') Dashboard | Program Catagory @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
           
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Add New</button>
                          </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                  <tr>
                                  
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Program</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php $a = 1; @endphp
                                    @foreach ($data as $program)
                                    <tr>
                                        <td>{{ $a }}</td>
                                        <td>{{ $program->name }}</td>
                                        <td>{{ $program->program->name }}</td>
                                        <td>
                                            <a href="#" class="btn btn-danger delete-btn" data-url="{{ route('program-category.destroy', $program->id) }}">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <a href="#" class="btn btn-primary edit-btn-cat" 
                                                data-id="{{ $program->id }}" 
                                                data-name="{{ $program->name }}" 
                                                data-program-id="{{ $program->program_id }}" 
                                                data-toggle="modal" 
                                                data-target="#editModal">
                                                    <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @php $a++; @endphp
                                    @endforeach
                                  
                                 
                                </tbody>
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
        <h5 class="modal-title" id="formModal">Add New Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('program-category.store') }}" method="POST" >
                @csrf
               
                <div class="form-group">
                    <label>Name *</label>
                    <input name="name" type="text" value="" class="form-control" required>
                </div>
                
                <div class="form-group">
                    <label>Select Program *</label>
                    <select class="form-control select2" name="program_id" required>
                        <option selected disabled>select</option>
                        @foreach ($programs as $program)
                            <option value="{{ $program->id }}" {{ old('program_id') == $program->id ? 'selected' : '' }}>
                                {{ $program->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('program_id') <small class="text-danger">{{ $message }}</small> @enderror
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
                <h5 class="modal-title" id="editModalLabel">Edit Program Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="editForm" action="{{route('program-category.update')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="edit_id"> 

                    <div class="form-group">
                        <label>Name *</label>
                        <input name="name" id="edit_name" type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Select Program *</label>
                        <select class="form-control select2" name="program_id" id="edit_program_id" required>
                            <option selected disabled>select</option>
                            @foreach ($programs as $program)
                                <option value="{{ $program->id }}">{{ $program->name }}</option>
                            @endforeach
                        </select>
                        @error('program_id') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>        
            </div>
        </div>
    </div>
</div>


<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">



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
                                Swal.fire("Deleted!", "Catagory has been deleted.", "success")
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