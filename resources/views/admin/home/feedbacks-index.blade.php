@extends('admin.layouts.main')
@section('title') Dashboard | Student Feedbacks @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <a href="{{ route('admin.home.feedbacks.create') }}" class="btn btn-primary">
                              Add New</a>
                          </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>description</th>
                                    <th>Action</th>
                                </tr>
                                @php $a = 1; @endphp
                                @foreach ($feedbacks as $feedback)
                              
                                <tr>
                                    <td>{{ $a }}</td>
                                    <td style="width:200px;"><img style="width:50%;" src="{{ asset('images/feedbacks/' . $feedback->image) }}" alt=""></td>
                                    <td>{{$feedback->name}}</td>
                                    <td>{{$feedback->description}}</td>
                                    <td>
                                      
                                        <a href="{{ route('feedback.edit', $feedback->id) }}" class="btn btn-primary">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    
                                  
                                        <a href="#" class="btn btn-danger delete-btn" data-url="{{ route('feedback.destroy', $feedback->id) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>
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
                                Swal.fire("Deleted!", "Feedback has been deleted.", "success")
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