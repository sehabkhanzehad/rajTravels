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
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Logo</h6>
                    <div class="table-responsive">
                        @if(session("warning"))
                            <div class="alert alert-warning text-center">{{ session("warning") }}</div>
                        @elseif (session("success"))
                            <div class="alert alert-success text-center">{{ session("success") }}</div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Logo</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($allLogo as $sl => $logo)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td><img src="{{ asset('uploads/dashboard/website/home/logo') }}/{{ $logo->logo }}"
                                                alt=""></td>

                                        <td><a  href="{{ route("websiteCustomize.logo.status", $logo->id) }}" id=""
                                                class="btn btn-{{ $logo->status == 'active' ? 'success' : 'danger' }}">{{ $logo->status == 'active' ? 'Active' : 'Inactive' }}</a>
                                        </td>

                                        <td>
                                            <a href="{{ route("websiteCustomize.logo.delete", $logo->id) }}" class="btn btn-danger" id="delete">Delete</a>
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
                    <h6 class="card-title">Upload Logo</h6>
                    @if (session('upload'))
                        <div class="alert alert-success">{{ session('upload') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('websiteCustomize.logo.submit') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleUploadLogo">Upload Logo</label>
                            <input id="uploadLogo" type="file" name="logo"
                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                                class="form-control">
                            @error('logo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            {{-- if logo not upload hidden the div --}}
                            <div id="logoDiv" style="display: none" class="my-3">
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
        const logo = document.getElementById('uploadLogo');
        const logoShow = document.getElementById('logoDiv');
        logo.addEventListener('change', function() {
            logoShow.style.display = 'block';
        });
    </script>


    <script>
        const statusButton = document.getElementById('status');
        statusButton.addEventListener('click', function() {
            // go to status change route

        });
    </script>
@endsection
