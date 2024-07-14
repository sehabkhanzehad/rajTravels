@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
@endsection

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="">Website Customize</a></li>
        <li class="breadcrumb-item active" aria-current="page">Home</li>
        <li class="breadcrumb-item active" aria-current="page">logo</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Update Logo</h6>
                <form class="forms-sample">




                    <div class="form-group">
                        <label for="exampleInputUsername1">Update Logo</label>
                        <input type="file" name="logo"
                            onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])"
                            class="form-control" autocomplete="off" placeholder="Name">
                        @error('picture')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="my-3">
                            <img src="{{ asset('uploads/dashboard/admin/profile') }}/{{ Auth::guard('admin')->user()->picture }}" id="logo" width="100" alt="Profile">
                        </div>


                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>

                </form>
            </div>
        </div>
    </div>



</div>



@endsection
