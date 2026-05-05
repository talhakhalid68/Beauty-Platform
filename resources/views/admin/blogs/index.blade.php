@extends('admin.layouts.main')
@section('title') Dashboard | Blogs @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Blogs</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Title</th>
                            <th>Catagory</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @php
                                $a=1;
                            @endphp
                            @foreach ($all_blogs as $blog)
                            <tr>
                                <td>
                                  {{$a}}
                                </td>
                                <td>{{$blog->name}}</td>
                               
                                <td>
                                    {{$blog->category->title}}
                                </td>
                               
                                <td>
                                    @if ($blog->status == 1)
                                        <div class="badge badge-success badge-shadow">Active</div>
                                    @else
                                    <div class="badge badge-warning badge-shadow">InActive</div>
                                    @endif
                                 
                                </td>
                                <td>
                                   
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger delete-btn" data-url="{{ route('newblog.destroy', $blog->id) }}">
                                        <i class="fas fa-trash-alt"></i>
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
                                Swal.fire("Deleted!", "Blog has been deleted.", "success")
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