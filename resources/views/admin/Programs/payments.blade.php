@extends('admin.layouts.main')
@section('title') Dashboard | Payments @endsection

@section('content')
<div class="main-content">
    <div style="margin-bottom: 20px;" class="text-right">
        <a href="{{route('admin.course.all')}}" class="btn btn-primary" >Back</a>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form action="{{route('content.payment.update')}}" method="POST" >
                    @csrf
                    <input type="hidden" name="course_id" value="{{$course_id}}" >
                    <div class="card">
                        <div class="card-header">
                            <h4>Payment Plans</h4>
                        </div>
                        <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="page_title" type="text" value="{{$payment_data->title}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea name="page_description" class="form-control auto-expand" required>{{$payment_data->description}}</textarea>
                                </div>
                                
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Update</button>
                        </div>
                    </div>
                   </form>
            </div>
@php
    $a=4;
@endphp
            @foreach ($payment_metas as $meta)
            <div class="col-md-4">
                <form action="{{ route('payment.meta.update', $meta->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Laravel requires this for update -->
            
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $meta->payment_title }}</h4>
                        </div>
                        <div class="card-body">
                            <input type="hidden" name="course_id" value="{{ $meta->course_id }}">
            
                            <div class="form-group">
                                <label>Title</label>
                                <input name="payment_title" type="text" value="{{ $meta->payment_title }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea name="payment_description" class="form-control auto-expand" required>{{ $meta->payment_description }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Currency</label>
                                <select class="form-control" name="currency" required>
                                    <option disabled selected>Select Currency</option>
                                    <option value="usd" {{ $meta->currency == "usd" ? 'selected' : '' }}>US Dollar (USD)</option>
                                    <option value="gbp" {{ $meta->currency == "gbp" ? 'selected' : '' }}>British Pound (GBP)</option>
                                    <option value="eur" {{ $meta->currency == "eur" ? 'selected' : '' }}>Euro (EUR)</option>
                                    <option value="aed" {{ $meta->currency == "aed" ? 'selected' : '' }}>UAE Dirham (AED)</option>
                                </select>
                                @error('currency') 
                                    <small class="text-danger">{{ $message }}</small> 
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Total Fee</label>
                                <input name="total_fee" type="number" value="{{ $meta->total_fee }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Payment you charge</label>
                                <input name="charge_payment" type="number" value="{{ $meta->charge_payment }}" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea name="content" id="editor{{ $a }}" class="form-control auto-expand" required>{{ $meta->content }}</textarea>

                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
            @php
                $a++;
            @endphp
            @endforeach
            
           
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