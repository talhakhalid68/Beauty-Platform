@extends('admin.layouts.main')
@section('title') Dashboard | Programs @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Courses</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Course name</th>
                            <th>Program name</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $a=1;
                            @endphp
                            @foreach ($courses as $course)
                            <tr>
                                <td>
                                  {{$a}}
                                </td>
                                <td>{{$course->name}}</td>
                               
                                <td>
                                    {{$course->program->name}}
                                </td>
                               
                                <td>
                                    @if ($course->status == 1)
                                        <div class="badge badge-success badge-shadow">Active</div>
                                    @else
                                    <div class="badge badge-warning badge-shadow">InActive</div>
                                    @endif
                                 
                                </td>
                                <td>
                                    <a href="{{ route('admin.course.content', $course->id) }}" class="btn btn-primary">Add Content</a>
                                    <a href="{{ route('admin.course.payment', $course->id) }}" class="btn btn-primary">Add Payment</a>
                                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                              </tr>  
                               @php
                                 $a++;
                               @endphp       
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
            <form action="{{ route('program.store') }}" method="POST" >
                @csrf
               
                <div class="form-group">
                    <label>Name *</label>
                    <input name="name" type="text" value="" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Submit</button>
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
                                Swal.fire("Deleted!", "Program has been deleted.", "success")
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