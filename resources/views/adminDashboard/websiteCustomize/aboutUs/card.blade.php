@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
    <link href="{{ asset('assets') }}/adminDashboard/vendors/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    	<!-- plugin css for this page -->
	<link rel="stylesheet" href="{{ asset("assets") }}/adminDashboard/vendors/select2/select2.min.css">
	<!-- end plugin css for this page -->
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="">Website Customize</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li>
            <li class="breadcrumb-item active" aria-current="page">Card</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Cards</h6>
                    <div class="table-responsive">
                        @if(session("deleted"))
                            <div class="alert alert-success text-center">{{ session("deleted") }}</div>
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
                                @forelse ($aboutCards as $sl => $card)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td><i class="bi bi-{{ $card->icon }}"></i></td>

                                        <td>{{ $card->title }}</td>
                                        <td class="text-wrap text-justify">{{ $card->description }}</td>

                                        <td>
                                            <form action="{{ route('card.destroy', $card->id) }} " method="POST">
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
                    <h6 class="card-title">Add Card</h6>
                    @if (session('added'))
                        <div class="alert alert-success">{{ session('added') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('card.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Icon</label><a style="float: right" href="https://icons.getbootstrap.com/" target="_blank">See all icon</a>
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
                            <textarea class="form-control" name="description" id="" placeholder="Enter description here" rows="3"></textarea>

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
@section("script")
<!-- plugin js for this page -->
<script src="{{ asset("assets") }}/adminDashboard/vendors/select2/select2.min.js"></script>
<!-- end plugin js for this page -->

<!-- custom js for this page -->
<script src="{{ asset("assets") }}/adminDashboard/js/select2.js"></script>
<!-- end custom js for this page -->
@endsection
