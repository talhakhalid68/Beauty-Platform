@extends('admin.layouts.main')
@section('title') Dashboard | Student Feedbacks @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>FeedBacks</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('feedback.update', $feedback->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="image-upload" id="image-label">Profile Image *</label>
                                <input type="file" name="image" class="form-control">
                                @if($feedback->image)
                                    <img src="{{ asset('images/feedbacks/' . $feedback->image) }}" width="100" alt="Current Image">
                                @endif
                            </div>
                        
                            <div class="form-group">
                                <label>Name *</label>
                                <input name="name" type="text" value="{{ $feedback->name }}" class="form-control" required>
                            </div>
                    
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control auto-expand" required>{{ $feedback->description }}</textarea>
                            </div>
                    
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" id="editor" class="form-control">{{ $feedback->content }}</textarea>
                            </div>
                            
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection