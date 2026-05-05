@extends('admin.layouts.main')
@section('title') Dashboard | Scholarship @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Section ONLINE LMS</h4>
                    </div>
                    <form action="{{ route('scholarship.update', $data->id) }}" method="POST" enctype="multipart/form-data">

                        @csrf
                    <div class="card-body">
                       
                            <div class="form-group">
                                <label>Title</label>
                                <input name="site_title" type="text" value="{{$data->site_title}}" class="form-control" required>
                            </div>
                        
                          
                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="site_description" class="form-control auto-expand" required>{{$data->site_description}}</textarea>
                            </div>
                        
                        
                            
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                   
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                       
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section2_description" class="form-control auto-expand" required>{{$data->section2_description}}</textarea>
                            </div>


                            <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="section2_image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->section2_image))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/scholarship/' . $data->section2_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>


                        
                              <div class="form-group">
                                <label>Title</label>
                                <input name="section2_title" type="text" value="{{$data->section2_title}}" class="form-control" required>
                            </div>
                        
                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section2_description2nd" class="form-control auto-expand" required>{{$data->section2_description2nd}}</textarea>
                            </div>
                        
                        
                            
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                      
                            <div class="form-group">
                                <label>Title</label>
                                <input name="section3_title" type="text" value="{{$data->section3_title}}" class="form-control" required>
                            </div>
                        
                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section3_description" class="form-control auto-expand" required>{{$data->section3_description}}</textarea>
                            </div>
                        
                            <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="section3_image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->section3_image))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/scholarship/' . $data->section3_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>
                        
                            
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                     
                    </div>
                </div>
            </div>


            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                      
                            <div class="form-group">
                                <label>Title</label>
                                <input name="section4_title" type="text" value="{{$data->section4_title}}" class="form-control" required>
                            </div>
                        
                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section4_description" class="form-control auto-expand" required>{{$data->section4_description}}</textarea>
                            </div>
                        
                            <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="section4_image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->section4_image))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/scholarship/' . $data->section4_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>
                        
                            
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                     
                    </div>
                </div>
            </div>

            

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                      
                            {{-- <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="section5_image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->section5_image))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/scholarship/' . $data->section5_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div> --}}
                        
                            <div class="form-group">
                                <label>Title</label>
                                <input name="section5_title" type="text" value="{{$data->section5_title}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section5_description" id="editor" class="form-control auto-expand" required>{{$data->section5_description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Button Name</label>
                                <input name="section5_button_name" type="text" value="{{$data->section5_button_name}}" class="form-control" required>
                            </div>

                            {{-- <div class="form-group">
                                <label>Button Link</label>
                                <input name="section5_button_link" type="text" value="{{$data->section5_button_link}}" class="form-control" required>
                            </div> --}}

                            <div class="form-group">
                                <label>Button Name</label>
                                <input name="section5_button_name2" type="text" value="{{$data->section5_button_name2}}" class="form-control" required>
                            </div>

                            {{-- <div class="form-group">
                                <label>Button Link</label>
                                <input name="section5_button_link2" type="text" value="{{$data->section5_button_link2}}" class="form-control" required>
                            </div> --}}
                        
                           
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                       
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    
                    <div class="card-body">
                      
                            {{-- <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="section6_image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->section6_image))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/scholarships/' . $data->section6_image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div> --}}
                        
                           

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="section6_description" id="editor2" class="form-control auto-expand" required>{{$data->section6_description}}</textarea>
                            </div>

                            

                            <div class="form-group">
                                <label>Button Name</label>
                                <input name="section6_button_name" type="text" value="{{$data->section6_button_name}}" class="form-control" required>
                            </div>

                            {{-- <div class="form-group">
                                <label>Button Link</label>
                                <input name="section6_button_link" type="text" value="{{$data->section6_button_link}}" class="form-control" required>
                            </div>
                         --}}
                           
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update</button>
                            </div>
                       
                    </div>
                </div>
            </div>
        </form>
        </div>
    </section>
</div>
  <!-- Include CKEditor script -->
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>
  <script>
    CKEDITOR.replace('editor2');
  </script>
@endsection