@extends('admin.layouts.main')
@section('title') Dashboard | Settings @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form action="{{ route('settings.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Settings</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <h4>Site Logo</h4>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="logo" id="image-upload" />
                                </div>
                        
                                @if (!empty($data->logo))
                                    <div class="mt-3">
                                        <img src="{{ asset('images/Settings/' . $data->logo) }}" alt="Current Image" style="max-width: 200px; border-radius: 8px;">
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="email" value="{{$data->email}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Phone Number</label>
                                <input name="phone_number" type="text" value="{{$data->phone_number}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="description" class="form-control" >{{$data->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Address</label>
                                <textarea name="address" class="form-control" >{{$data->address}}</textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Youtube Link</label>
                                <input name="youtube_link" type="text" value="{{$data->youtube_link}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Linkedin Link</label>
                                <input name="linkedin_link" type="text" value="{{$data->linkedin_link}}" class="form-control" >
                            </div>

                            <div class="form-group">
                                <label>Tiktok Link</label>
                                <input name="tiktok_link" type="text" value="{{$data->tiktok_link}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Twitter Link</label>
                                <input name="twitter_link" type="text" value="{{$data->twitter_link}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Instagaram Link</label>
                                <input name="instagram_link" type="text" value="{{$data->instagram_link}}" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Facebook Link</label>
                                <input name="facebook_link" type="text" value="{{$data->facebook_link}}" class="form-control" >
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