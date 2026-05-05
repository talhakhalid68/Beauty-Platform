@extends('admin.layouts.main')
@section('title') Dashboard | About Us @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form action="{{ route('aboutus.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>About Us</h4>
                        </div>
                        <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="page_title" type="text" value="{{$data->page_title}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="page_description" class="form-control auto-expand" required>{{$data->page_description}}</textarea>
                                </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>

                

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="section2_title" type="text" value="{{$data->section2_title}}" class="form-control" required>
                        </div>

                        

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="section_2_title_1" type="text" value="{{$data->section_2_title_1}}" class="form-control" required><br>
                                        <input name="section_2_description_1" type="text" value="{{$data->section_2_description_1}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section_2_title_2" type="text" value="{{$data->section_2_title_2}}" class="form-control" required><br>
                                    <input name="section_2_description_2" type="text" value="{{$data->section_2_description_2}}" class="form-control" required>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section_2_title_3" type="text" value="{{$data->section_2_title_3}}" class="form-control" required><br>
                                    <input name="section_2_description_3" type="text" value="{{$data->section_2_description_3}}" class="form-control" required>
                                </div>
                            </div>
                            </div>
                        
                            <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="section_2_image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->section_2_image))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/AboutUs/' . $data->section_2_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>
                        
                        
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                            
                            
                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="section3_content" class="form-control" id="editor">{{$data->section3_content}}</textarea>
                        </div>
                        
                            <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="section_3_image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->section_3_image))
                                    <div class="mt-3">
                                        <img src="" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>
                         
                    </div>
                    
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="section_4_title" type="text" value="{{$data->section_4_title}}" class="form-control" required>
                        </div>

                            <div class="row">
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="section_4_title_1" type="text" value="{{$data->section_4_title_1}}" class="form-control" required><br>
                                        <input name="section_4_description_1" type="text" value="{{$data->section_4_description_1}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section_4_title_2" type="text" value="{{$data->section_4_title_2}}" class="form-control" required><br>
                                    <input name="section_4_description_2" type="text" value="{{$data->section_4_description_2}}" class="form-control" required>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section_4_title_3" type="text" value="{{$data->section_4_title_3}}" class="form-control" required><br>
                                    <input name="section_4_description_3" type="text" value="{{$data->section_4_description_3}}" class="form-control" required>
                                </div>
                            </div>
                            </div>
                        
                           <hr>

                           <div class="row">
                                
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section_4_title_4" type="text" value="{{$data->section_4_title_4}}" class="form-control" required><br>
                                    <input name="section_4_description_4" type="text" value="{{$data->section_4_description_4}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <input name="section_4_title_5" type="text" value="{{$data->section_4_title_5}}" class="form-control" required><br>
                                <input name="section_4_description_5" type="text" value="{{$data->section_4_description_5}}" class="form-control" required>
                            </div>
                        </div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <input name="section_4_title_6" type="text" value="{{$data->section_4_title_6}}" class="form-control" required><br>
                                <input name="section_4_description_6" type="text" value="{{$data->section_4_description_6}}" class="form-control" required>
                            </div>
                        </div>
                        </div>
                    
                        
                        
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">


                        <div class="form-group">
                            <h4>Image Upload</h4>
                            <div id="image-preview" class="image-preview">
                                <label for="image-upload" id="image-label">Choose File</label>
                                <input type="file" name="section_5_image" id="image-upload" />
                            </div>
                    
                            @if (!empty($data->section_5_image))
                                <div class="mt-3">
                                    <img src="{{ asset('images/AboutUs/' . $data->section_5_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="section5_content" class="form-control" id="editor2">{{$data->section5_content}}</textarea>
                        </div>


                       

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="section5_title_1" type="text" value="{{$data->section5_title_1}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section5_title_2" type="text" value="{{$data->section5_title_2}}" class="form-control" required>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section5_title_3" type="text" value="{{$data->section5_title_3}}" class="form-control" required>
                                </div>
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input name="section5_title_4" type="text" value="{{$data->section5_title_4}}" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section5_title_5" type="text" value="{{$data->section5_title_5}}" class="form-control" required>
                                </div>
                            </div>
                                <div class="col-md-4">
                                <div class="form-group">
                                    <input name="section5_title_6" type="text" value="{{$data->section5_title_6}}" class="form-control" required>
                                </div>
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

<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor');
</script>
<script>
    CKEDITOR.replace('editor2');
</script>

@endsection