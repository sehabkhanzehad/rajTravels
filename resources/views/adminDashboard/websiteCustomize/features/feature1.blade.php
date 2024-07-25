@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="">Website Customize</a></li>
            <li class="breadcrumb-item active" aria-current="page">Featuers</li>
            <li class="breadcrumb-item active" aria-current="page">Feature 1</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Titel & Description</h6>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('feature1.titelDescription') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="uploadBanner" style="color: red; font-size: 20px" value="{{ $feature1->title }}"
                                type="text" name="title" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" style="font-size: 20px; text-align: justify;" name="description" rows="7">{{ $feature1->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Done</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Image-1</h6>
                    @if (session('image1Updated'))
                        <div class="alert alert-success">{{ session('image1Updated') }}</div>
                    @endif

                    <form class="forms-sample" action="{{ route('feature1.image1') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input id="" type="file" name="image1"
                                onchange="document.getElementById('blah1').src = window.URL.createObjectURL(this.files[0])"
                                class="form-control">
                            @error('image1')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="my-3">
                                <img src="{{ asset('uploads/dashboard/website/features') }}/{{ App\Models\FeaturesOne::first()->image1 }}"
                                    id="blah1" width="100" alt="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Done</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Image-2</h6>
                    @if (session('image2Updated'))
                        <div class="alert alert-success">{{ session('image2Updated') }}</div>
                    @endif

                    <form class="forms-sample" action="{{ route('feature1.image2') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <input id="" type="file" name="image2"
                                onchange="document.getElementById('blah2').src = window.URL.createObjectURL(this.files[0])"
                                class="form-control">
                            @error('image2')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="my-3">
                                <img src="{{ asset('uploads/dashboard/website/features') }}/{{ App\Models\FeaturesOne::first()->image2 }}"
                                    id="blah2" width="100" alt="">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Done</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
