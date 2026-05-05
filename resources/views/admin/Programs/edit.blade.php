@extends('admin.layouts.main')
@section('title') Dashboard | Course Edit @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                
                    <div class="card">
                        <div class="card-header">
                            <h4>Edit Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" id="name" type="text" class="form-control" required onkeyup="generateSlug()" value="{{ old('name', $course->name) }}">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                
                            <div class="form-group">
                                <label>Slug</label>
                                <input name="slug" id="slug" type="text" class="form-control" required readonly value="{{ old('slug', $course->slug) }}">
                                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                           
                            <div class="form-group">
                                <label>Select Program</label>
                                <select class="form-control select2" name="program_id" id="program_id" required>
                                    <option selected disabled>select</option>
                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}" {{ old('program_id', $course->program_id) == $program->id ? 'selected' : '' }}>
                                            {{ $program->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('program_id') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2" name="cat_id" id="cat_id" required>
                                    <option selected disabled>select</option>
                                    @foreach ($programs_catagories as $program_cat)
                                    <option value="{{ $program_cat->id }}" {{ old('cat_id', $course->cat_id) == $program_cat->id ? 'selected' : '' }}>
                                        {{ $program_cat->name }}
                                    </option>
                                @endforeach
                                </select>
                                @error('cat_id') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="form-group">
                                <label>Small Description</label>
                                <textarea name="small_description"  class="form-control" required>{{ old('small_description', $course->small_description) }}</textarea>
                                @error('small_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                

                            <div class="form-group">
                                <label>Current Image</label>
                                <br>
                                @if($course->image_path)
                                    <img src="{{ asset('images/courses/' . $course->image_path) }}" alt="Course Image" width="150">
                                @else
                                    <p>No image uploaded</p>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label>Upload New Image</label>
                                <input type="file" name="image" class="form-control">
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            
                
                            <div class="form-group">
                                <label>Publish Status</label>
                                <select class="form-control" name="status" required>
                                    <option selected disabled>select</option>
                                    <option value="1" {{ old('status', $course->status) == "1" ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $course->status) == "0" ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" name="meta_tags" value="{{ $course->meta_tags }}" class="form-control" placeholder="Use , for spareate Tags"  value="{{ old('meta_tags') }}">
                                @error('meta_tags') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description"  class="form-control">{{ $course->meta_description }}</textarea>
                                @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>


                            <div class="form-group">
                                <label>Current Video</label>
                                <br>
                                @if($course->video)
                                    <video width="200" controls>
                                        <source src="{{ asset('animation/' . $course->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <p>No video uploaded</p>
                                @endif
                            </div>
                            
                            <div class="form-group">
                                <label>Upload New Video</label>
                                <input type="file" name="video" class="form-control" accept="video/*">
                                @error('video') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>


                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-header">
                            <h4>Course Content</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" id="course-editor" class="form-control">{{ old('content', $course->content) }}</textarea>
                                @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                             <div class="form-group">
                                <div class="form-check">
                                    <input type="checkbox" name="page" id="second-page" value="1" class="form-check-input"
                                        {{ old('page', $course->page) == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="second-page">Second Page</label>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
                
                
            </div>
        </div>
    </section>
</div>

<!-- Froala Editor CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/css/froala_editor.pkgd.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/css/plugins.pkgd.min.css">

<!-- Froala Editor JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/js/froala_editor.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.12/js/plugins.pkgd.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        new FroalaEditor('#course-editor', {
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
    function generateSlug() {
        let name = document.getElementById("name").value;
        let slug = name.toLowerCase()
            .replace(/ /g, '-')      
            .replace(/[^\w-]+/g, ''); 

        document.getElementById("slug").value = slug;
    }
</script>


@endsection