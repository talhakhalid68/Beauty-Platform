@extends('admin.layouts.main')
@section('title') Dashboard | Home Slider @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Section 2 Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('section2.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" type="text" value="{{ $data->title }}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Title 2</label>
                                <input name="title2" type="text" value="{{ $data->title2 }}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control auto-expand" required>{{ $data->description }}</textarea>
                            </div>
                        
                            <div class="form-group">
                                <h4>Image Upload</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->image))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/section2/' . $data->image) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>
                        
                            <div class="form-group">
                                <label>Slider Content</label>
                                <textarea name="slider_description" class="form-control auto-expand" required>{{ $data->slider_description }}</textarea>
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

@endsection