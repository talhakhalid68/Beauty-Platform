@extends('admin.layouts.main')
@section('title') Dashboard | Home Slider @endsection

@section('content')
<div class="main-content">
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Section 3 Content</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('section3.update', $data->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Section Title</label>
                                <input name="section_title" type="text" value="{{$data->section_title}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Title 1</label>
                                <input name="title1" type="text" value="{{$data->title1}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Title 2</label>
                                <input name="title2" type="text" value="{{$data->title2}}" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Title 3</label>
                                <input name="title3" type="text" value="{{$data->title3}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Title 4</label>
                                <input name="title4" type="text" value="{{$data->title4}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Title 5</label>
                                <input name="title5" type="text" value="{{$data->title5}}" class="form-control" required>
                            </div>
                        
                            <div class="form-group">
                                <label>Title 6</label>
                                <input name="title6" type="text" value="{{$data->title6}}" class="form-control" required>
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