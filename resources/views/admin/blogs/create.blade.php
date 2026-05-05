@extends('admin.layouts.main')
@section('title') Dashboard | New Blog @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>New Blog</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" id="name" type="text" class="form-control" required onkeyup="generateSlug()" value="{{ old('name') }}">
                                @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                
                            <div class="form-group">
                                <label>Slug</label>
                                <input name="slug" id="slug" type="text" class="form-control" required readonly value="{{ old('slug') }}">
                                @error('slug') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                
                            <div class="form-group">
                                <label>Select Catagory</label>
                                <select class="form-control select2" name="cat_id" required>
                                    <option selected disabled>select</option>
                                    @foreach ($catagories as $program)
                                        <option value="{{ $program->id }}">{{ $program->title }}</option>
                                    @endforeach
                                </select>
                                @error('cat_id') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                           
                          
                            
                            <div class="form-group">
                                <label>Small Description</label>
                                <textarea name="small_description"  class="form-control" required></textarea>
                                @error('small_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input name="image" id="image" type="file" class="form-control" required>
                                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                
                            <div class="form-group">
                                <label>Publish Status</label>
                                <select class="form-control" name="status" required>
                                    <option selected disabled>select</option>
                                    <option value="1" {{ old('status') == "1" ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status') == "0" ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>

                            <div class="form-group">
                                <label>Meta Tags</label>
                                <input type="text" name="meta_tags" class="form-control" placeholder="Use , for spareate Tags"  value="{{ old('meta_tags') }}">
                                @error('meta_tags') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            
                            
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea name="meta_description" class="form-control">{{ old('meta_description') }}</textarea>
                                @error('meta_description') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>


                            <div class="card-body">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" id="editor" class="form-control">{{ old('content') }}</textarea>
                                    @error('content') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                
                   
                    
                </form>
            </div>
        </div>
    </section>
</div>

<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<script>
    CKEDITOR.replace('editor2');
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