@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="">Website Customize</a></li>
            <li class="breadcrumb-item active" aria-current="page">Home</li>
            <li class="breadcrumb-item active" aria-current="page">Banner</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
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

                                                <button type="submit" id="" class="btn btn-{{ $banner->status == 'active' ? 'success' : 'danger' }}">{{ $banner->status == 'active' ? 'Active' : 'Inactive' }}
                                                </button>
                                            </form>
                                        </td>

                                        <td>
                                            <form action="{{ route('banner.destroy', $banner->id) }} " method="POST">
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
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Upload Banner</h6>
                    @if (session('upload'))
                        <div class="alert alert-success">{{ session('upload') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('banner.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleUploadBanner">Upload Banner</label>
                            <input id="uploadBanner" type="file" name="banner"
                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                                class="form-control">
                            @error('banner')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            {{-- if logo not upload hidden the div --}}
                            <div id="bannerDiv" style="display: none" class="my-3">
                                <img src="" id="blah" width="100" alt="">
                            </div>


                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Done</button>

                    </form>
                </div>
            </div>
        </div>



    </div>
@endsection

@section('script')
    <script>
        const banner = document.getElementById('uploadBanner');
        const bannerShow = document.getElementById('bannerDiv');
        banner.addEventListener('change', function() {
            bannerShow.style.display = 'block';
        });
    </script>
@endsection
