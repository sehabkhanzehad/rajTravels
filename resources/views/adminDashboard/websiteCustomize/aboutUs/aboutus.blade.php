@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="">Website Customize</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
    </nav>

    <div class="row">
        {{-- <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Banners</h6>
                    <div class="table-responsive">
                        @if (session('warning'))
                            <div class="alert alert-warning text-center">{{ session('warning') }}</div>
                        @elseif (session('success'))
                            <div class="alert alert-success text-center">{{ session('success') }}</div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Banner</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($allBanner as $sl => $banner)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td><img style="height: 50px; width: 100px; border: 2px solid blue; border-radius: 0"
                                                src="{{ asset('uploads/dashboard/website/home/banner') }}/{{ $banner->banner }}"
                                                alt=""></td>

                                        <td>
                                            <form action="{{ route('banner.update', $banner->id) }} " method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <button type="submit" id=""
                                                    class="btn btn-{{ $banner->status == 'active' ? 'success' : 'danger' }}">{{ $banner->status == 'active' ? 'Active' : 'Inactive' }}
                                                </button>
                                            </form>
                                        </td>

                                        <td>
                                            <form action="{{ route('banner.destroy', $banner->id) }} " method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger" id="delete">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr></tr>
                                @endforelse


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="col-md-10 m-auto">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update About Us</h6>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('aboutus.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="uploadBanner" style="color: red; font-size: 20px" value="{{ $aboutUs->title }}" type="text" name="title" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" style="font-size: 20px; text-align: justify;"  name="description" rows="7">{{ $aboutUs->description }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Done</button>

                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection
