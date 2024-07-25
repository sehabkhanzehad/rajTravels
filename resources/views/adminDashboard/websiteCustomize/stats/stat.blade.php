@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="">Website Customize</a></li>
            <li class="breadcrumb-item active" aria-current="page">Stats</li>
            <li class="breadcrumb-item active" aria-current="page">Baskgorund & Stats</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Update Background</h6>
                    @if (session('Updated'))
                        <div class="alert alert-success">{{ session('Updated') }}</div>
                    @endif
                    <form class="forms-sample" action="{{ route('stats.background') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input id="" type="file" name="background"
                                onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])"
                                class="form-control">
                            @error('background')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="my-3">
                                <img src="{{ asset('uploads/dashboard/website/stats/background') }}/{{ App\Models\StatBackground::first()->background }}"
                                    id="blah" width="100" alt="">
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary mr-2">Done</button>

                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-7 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 style="display: inline" class="card-title">Stats</h6>

                    <div style="display: inline; float : right" class="dropdown">
                        <button title="Add" class="btn btn-primary btn-icon" type="button" id="dropdownMenuButton6"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                data-feather="plus-circle"></i></button>


                        <div style="width: 250px" class="dropdown-menu p-3" aria-labelledby="dropdownMenuButton6">
                            <h6 class="dropdown-header text-center">Add Stat</h6>
                            <form action="{{ route('stats.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="topic">Topic</label>
                                    <input type="text" required class="form-control" name="topic" id="topic"
                                        placeholder="Topic">
                                    @error('topic')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="data">Data</label>
                                    <input type="number" required name="data" class="form-control" id="data"
                                        placeholder="123">
                                    @error('data')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Add</button>
                            </form>
                        </div>


                    </div>

                    <div class="table-responsive">
                        @if (session('success'))
                            <div class="alert alert-success text-center">{{ session('success') }}</div>
                        @endif
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Topic</th>
                                    <th>Data</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($stats as $sl => $stat)
                                    <tr>
                                        <td>{{ $sl + 1 }}</td>
                                        <td>{{ $stat->topic }}</td>
                                        <td>{{ $stat->data }}</td>
                                        <td>
                                            <form action="{{ route('stats.destroy', $stat->id) }} " method="POST">
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



    </div>
@endsection

@section('script')
@endsection
