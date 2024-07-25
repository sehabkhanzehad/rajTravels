@extends('adminDashboard.blank')
@section('head')
    <title>Website Customize</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets') }}/adminDashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <!-- end plugin css for this page -->
@endsection

@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item "><a href="">Pilgrims</a></li>
            <li class="breadcrumb-item active" aria-current="page">All</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">All Pilgrims</h6>
                    {{-- <p class="card-description">Read the <a href="https://datatables.net/" target="_blank"> Official
                            DataTables Documentation </a>for a full list of instructions and other options.</p> --}}
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Name</th>
                                    <th>Group</th>
                                    <th>Year</th>
                                    <th>Date</th>
                                    <th>Gender</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01</td>
                                    <td><a href="">Zehad</a></td>
                                    <td>Raj</td>
                                    <td>2023</td>
                                    <td>2011/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Sehab</td>
                                    <td>Raj</td>
                                    <td>2023</td>
                                    <td>2011/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Sk</td>
                                    <td>CB</td>
                                    <td>2024</td>
                                    <td>2011/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Ajij</td>
                                    <td>Cb</td>
                                    <td>2025</td>
                                    <td>2011/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Sagot</td>
                                    <td>AN</td>
                                    <td>2022</td>
                                    <td>2024/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Alvis</td>
                                    <td>AN</td>
                                    <td>2019</td>
                                    <td>2023/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Juba</td>
                                    <td>CB</td>
                                    <td>2021</td>
                                    <td>2018/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Rony</td>
                                    <td>Raj</td>
                                    <td>2024</td>
                                    <td>2024/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Azim</td>
                                    <td>Raj</td>
                                    <td>2019</td>
                                    <td>2011/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Roki</td>
                                    <td>Raj</td>
                                    <td>2023</td>
                                    <td>2011/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Sarwar</td>
                                    <td>Raj</td>
                                    <td>2023</td>
                                    <td>2011/04/25</td>
                                    <td>delete</td>
                                </tr>
                                <tr>
                                    <td>01</td>
                                    <td>Faisal</td>
                                    <td>Raj</td>
                                    <td>2023</td>
                                    <td>2022/08/25</td>
                                    <td>delete</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <!-- plugin js for this page -->
    <script src="{{ asset('assets') }}/adminDashboard/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="{{ asset('assets') }}/adminDashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- end plugin js for this page -->


    <!-- custom js for this page -->
    <script src="{{ asset('assets') }}/adminDashboard/js/data-table.js"></script>
    <!-- end custom js for this page -->
@endsection
