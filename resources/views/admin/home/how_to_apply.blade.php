@extends('admin.layouts.main')
@section('title') Dashboard | Home Slider @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>HOW TO APPLY</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('section4.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="form-group">
                                <label>Section Title</label>
                                <input name="section_title" type="text" value="{{$data->section_title}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control auto-expand" required>{{$data->description}}</textarea>
                            </div>
                        
                            <div class="form-group">
                                <label>Button Name</label>
                                <input name="button_name" value="{{$data->button_name}}" type="text" class="form-control" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Button Link</label>
                                <input name="button_link" type="text" value="{{$data->button_link}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Button Name 2</label>
                                <input name="button_name2" value="{{$data->button_name2}}" type="text" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Button Link 2</label>
                                <input name="button_link2" type="text" value="{{$data->button_link2}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Upload Video</label>
                                <input type="file" name="video" class="form-control">
                            </div>
                        
                            @if(!empty($data->video))
                                <div class="form-group">
                                    <label>Current Video:</label><br>
                                    <video width="200" controls>
                                        <source src="{{ asset('uploads/video/' . $data->video) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                        
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

@endsection