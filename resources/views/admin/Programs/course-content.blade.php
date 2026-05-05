@extends('admin.layouts.main')
@section('title') Dashboard | Course Content @endsection

@section('content')
<div class="main-content">
    <div style="margin-bottom: 20px;" class="text-right">
        <a href="{{route('admin.course.all')}}" class="btn btn-primary" >Back</a>
    </div>
    
    <section class="section">
        <div class="row">
            
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Section Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('content.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="course_id" value="{{$course_id}}" id="">
                            <div class="form-group">
                                <label>Title (Course Structure)</label>
                                <input name="title" type="text" value="{{ $courseStructure->title ?? '' }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" >{{ $courseStructure->description ?? '' }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" id="content-edit-editor" class="form-control">{{$courseStructure->content ?? ''}}</textarea>
                                @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>

            
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                              Add Content</button>
                          </div>
                    </div>
                    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                @php $a = 1; @endphp
                                @foreach ($coursemetas as $meta)
                                <tr>
                                    <td>{{ $a }}</td>
                                    <td>{{ $meta->title }}</td>
                                    <td>
                                        <a href="#" class="btn btn-primary edit-btn3" 
                                            data-id="{{ $meta->id }}" 
                                            data-title="{{ $meta->title }}" 
                                            data-description="{{ $meta->content }}" 
                                            data-toggle="modal" 
                                            data-target="#editModal">
                                                <i class="fas fa-edit"></i>
                                        </a>
                                        
                                        <a href="#" class="btn btn-danger delete-btn" data-url="{{ route('content.destroy', $meta->id) }}">Delete</a>
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
                        <h4>Section Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('course.structure.update.card')}}" method="POST">
                            @csrf
                            
                            <input type="hidden" name="course_id" value="{{$course_id}}" id="">
                            <div class="form-group">
                                <label>Video url</label>
                                <input name="url" type="text" value="{{ $courseStructure->url ?? '' }}" class="form-control">
                            </div>
                            
                            
                             <div class="form-group">
                                <label>Video Frame Type</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="video_frame" id="youtube" value="1"
                                        {{ ($courseStructure->video_frame ?? 1) == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="youtube">YouTube Video</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="video_frame" id="gdrive" value="2"
                                        {{ ($courseStructure->video_frame ?? 1) == 2 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="gdrive">Google Drive Video</label>
                                </div>
                            </div>
                           

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section_3_title_1" type="text" value="{{$courseStructure->section_3_title_1 ?? '' }}" class="form-control" ><br>
                                        <input name="section_3_title_1_content" type="text" value="{{ $courseStructure->section_3_title_1_content ?? '' }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section_3_title_2" type="text" value="{{ $courseStructure->section_3_title_2 ?? '' }}" class="form-control" ><br>
                                        <input name="section_3_title_2_content" type="text" value="{{ $courseStructure->section_3_title_2_content ?? '' }}" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section_3_title_3" type="text" value="{{$courseStructure->section_3_title_3 ?? '' }}" class="form-control" ><br>
                                        <input name="section_3_title_3_content" type="text" value="{{$courseStructure->section_3_title_3_content ?? '' }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section_3_title_4" type="text" value="{{$courseStructure->section_3_title_4 ?? '' }}" class="form-control" ><br>
                                        <input name="section_3_title_4_content" type="text" value="{{$courseStructure->section_3_title_4_content ?? '' }}" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section_3_title_5" type="text" value="{{$courseStructure->section_3_title_5 ?? '' }}" class="form-control" ><br>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section_3_title_5_content" type="text" value="{{$courseStructure->section_3_title_5_content ?? '' }}" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            
                           
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Fee Payment Plans</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('course.payment.content.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="course_id" value="{{$course_id}}" id="">
                          
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="payment_content" id="fee-editor" class="form-control">{{$courseStructure->payment_content ?? ''}}</textarea>
                                @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Section Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('course.content2.update')}}" method="POST">
                            @csrf
                            
                            <input type="hidden" name="course_id" value="{{$course_id}}" id="">
                            <div class="form-group">
                                <label>Title</label>
                                <input name="section5_title" type="text" value="{{ $courseStructure->section5_title ?? '' }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section5_description" class="form-control">{{ $courseStructure->section5_description ?? '' }}</textarea>
                            </div>
                           

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section5_title_1" type="text" value="{{$courseStructure->section5_title_1 ?? '' }}" class="form-control" ><br>
                                        <input name="section5_title_1_content" type="text" value="{{ $courseStructure->section5_title_1_content ?? '' }}" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section5_title_2" type="text" value="{{ $courseStructure->section5_title_2 ?? '' }}" class="form-control" ><br>
                                        <input name="section5_title_2_content" type="text" value="{{ $courseStructure->section5_title_2_content ?? '' }}" class="form-control" >
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section5_title_3" type="text" value="{{$courseStructure->section5_title_3 ?? '' }}" class="form-control" ><br>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="section5_title_4" type="text" value="{{ $courseStructure->section5_title_4 ?? '' }}" class="form-control" ><br>

                                    </div>
                                </div>
                            </div>

                           

                            <div class="form-group">
                                <label>Title 2</label>
                                <input name="section5_title_2_alt" type="text" value="{{ $courseStructure->section5_title_2_alt ?? '' }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section5_description_2" id="section-content-editor" class="form-control">{{ $courseStructure->section5_description_2 ?? '' }}</textarea>
                            </div>

                            
                           
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>



            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Section Explore Our Programs</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('course.content3.update')}}" method="POST">
                            @csrf
                            
                            <input type="hidden" name="course_id" value="{{$course_id}}" id="">
                            <div class="form-group">
                                <label>Title</label>
                                <input name="section6_title" type="text" value="{{ $courseStructure->section6_title ?? '' }}" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section6_description" class="form-control">{{ $courseStructure->section6_description ?? '' }}</textarea>
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
          <h5 class="modal-title" id="formModal">Content</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('content.table.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="course_id" value="{{$course_id}}" id="">
            <div class="form-group">
              <label>Title *</label>
              <input name="title" type="text" value="" class="form-control" required>
            </div>
            <div class="form-group">
              <label>Content *</label>
              <textarea name="content" class="form-control" id="editor2" required></textarea>
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
                <h5 class="modal-title" id="editModalLabel">Edit content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <form action="{{ route('content.table.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <!-- Hidden ID Field -->
                    <input type="hidden" name="id" id="edit-id">

                  

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
                                Swal.fire("Deleted!", "Contetn has been deleted.", "success")
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

<!-- Froala Editor CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/css/froala_editor.pkgd.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/css/plugins.pkgd.min.css">

<!-- Froala Editor JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/js/froala_editor.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/js/plugins.pkgd.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new FroalaEditor('#content-edit-editor', {
            height: 400, // Adjust height
            theme: 'royal', // Change theme (default, gray, red, dark, royal)
            toolbarButtons: {
                moreText: {
                    buttons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass', 'inlineStyle', 'clearFormatting']
                },
                moreParagraph: {
                    buttons: ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'outdent', 'indent', 'lineHeight', 'paragraphFormat', 'paragraphStyle']
                },
                moreRich: {
                    buttons: ['insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'emoticons', 'specialCharacters', 'insertHR']
                },
                moreMisc: {
                    buttons: ['undo', 'redo', 'fullscreen', 'print', 'getPDF', 'spellChecker', 'selectAll', 'html'],
                    align: 'right'
                }
            },
            pluginsEnabled: ['align', 'charCounter', 'codeBeautifier', 'codeView', 'colors', 'draggable', 'emoticons', 'entities', 'file', 'fontAwesome', 'fullscreen', 'image', 'imageManager', 'inlineClass', 'inlineStyle', 'lineBreaker', 'link', 'lists', 'paragraphFormat', 'paragraphStyle', 'quickInsert', 'quote', 'save', 'table', 'url', 'video', 'wordPaste'],
            imageUploadURL: '/upload_image', // Set image upload route
            fileUploadURL: '/upload_file', // Set file upload route
            videoUploadURL: '/upload_video' // Set video upload route
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        new FroalaEditor('#fee-editor', {
            height: 400,
            theme: 'royal',
            toolbarButtons: {
                moreText: {
                    buttons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass', 'inlineStyle', 'clearFormatting']
                },
                moreParagraph: {
                    buttons: ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'outdent', 'indent', 'lineHeight', 'paragraphFormat', 'paragraphStyle']
                },
                moreRich: {
                    buttons: ['insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'emoticons', 'specialCharacters', 'insertHR']
                },
                moreMisc: {
                    buttons: ['undo', 'redo', 'fullscreen', 'print', 'getPDF', 'spellChecker', 'selectAll', 'html'],
                    align: 'right'
                }
            },
            pluginsEnabled: ['align', 'charCounter', 'codeBeautifier', 'codeView', 'colors', 'draggable', 'emoticons', 'entities', 'file', 'fontAwesome', 'fullscreen', 'image', 'imageManager', 'inlineClass', 'inlineStyle', 'lineBreaker', 'link', 'lists', 'paragraphFormat', 'paragraphStyle', 'quickInsert', 'quote', 'save', 'table', 'url', 'video', 'wordPaste'],
            imageUploadURL: '/upload_image',
            fileUploadURL: '/upload_file',
            videoUploadURL: '/upload_video'
        });
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        new FroalaEditor('#section-content-editor', {
            height: 400,
            theme: 'royal',
            toolbarButtons: {
                moreText: {
                    buttons: ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass', 'inlineStyle', 'clearFormatting']
                },
                moreParagraph: {
                    buttons: ['alignLeft', 'alignCenter', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'outdent', 'indent', 'lineHeight', 'paragraphFormat', 'paragraphStyle']
                },
                moreRich: {
                    buttons: ['insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'emoticons', 'specialCharacters', 'insertHR']
                },
                moreMisc: {
                    buttons: ['undo', 'redo', 'fullscreen', 'print', 'getPDF', 'spellChecker', 'selectAll', 'html'],
                    align: 'right'
                }
            },
            pluginsEnabled: ['align', 'charCounter', 'codeBeautifier', 'codeView', 'colors', 'draggable', 'emoticons', 'entities', 'file', 'fontAwesome', 'fullscreen', 'image', 'imageManager', 'inlineClass', 'inlineStyle', 'lineBreaker', 'link', 'lists', 'paragraphFormat', 'paragraphStyle', 'quickInsert', 'quote', 'save', 'table', 'url', 'video', 'wordPaste'],
            imageUploadURL: '/upload_image',
            fileUploadURL: '/upload_file',
            videoUploadURL: '/upload_video'
        });
    });
</script>




@endsection