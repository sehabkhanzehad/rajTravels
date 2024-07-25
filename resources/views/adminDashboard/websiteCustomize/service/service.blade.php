@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
    <link href="{{ asset('assets') }}/adminDashboard/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="">Website Customize</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Cards</h6>
                    <div class="table-responsive">
                        @if (session('deleted'))
                            <div class="alert alert-success text-center">{{ session('deleted') }}</div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Icon</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $sl => $service)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td><i class="bi bi-{{ $service->icon }}"></i></td>

                                        <td class="text-wrap">{{ $service->title }}</td>
                                        <td class="text-wrap text-justify">{{ $service->description }}</td>

                                        <td>
                                            <form action="{{ route('service.destroy', $service->id) }} " method="POST">
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
                    <h6 class="card-title">Add Service</h6>
                    @if (session('added'))
                        <div class="alert alert-success">{{ session('added') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('service.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="title">Icon</label><a style="float: right" href="https://icons.getbootstrap.com/" target="_blank">See all icon</a>
                            <input type="text" name="icon" placeholder="Enter icon name here" class="form-control">
                            @error('icon')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" placeholder="Enter title here" class="form-control">
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control text-justify" name="description" id="" placeholder="Enter description here"
                                rows="4"></textarea>
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
@section('script')
@endsection
