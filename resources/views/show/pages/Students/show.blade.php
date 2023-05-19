@extends('Show.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="main-content" id="panel">
    @include('Show.includes.header')
    <!-- Header -->
        <!-- Header -->
        <div class="header bg-primary pb-6">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0">{{ $pageTitle }}</h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                                class="fas fa-home"></i></a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('show.student.index') }}">Students</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $student->id }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body bg-gray-100 radius shadow-2xl">
                            <h5 class="card-title text-uppercase mb-0">Student Name</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $student->full_name }}</span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body bg-gray-100 radius shadow-2xl">
                            <h5 class="card-title text-uppercase mb-0">Mother Name</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $student->mother_name }}</span>
                        </div>
                    </div>
                </div>
                <!-- Stats -->
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card bg-gradient-default radius shadow-2xl">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-white mb-0">Student#</h5>
                                            <span class="h2 font-weight-bold text-white mb-0">{{ $student->id }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                                                <i class="fas fa-calendar-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-gradient-default radius shadow-2xl">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-white mb-0">Join Date</h5>
                                            <span class="h2 font-weight-bold text-white mb-0">{{ $student->join_date }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                                                <i class="fas fa-calendar-minus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-gradient-default radius shadow-2xl">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-white mb-0">National Id</h5>
                                    <span class="h2 font-weight-bold text-white mb-0">{{ $student->personuid }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card bg-gradient-default radius shadow-2xl">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title text-uppercase text-white mb-0">Address</h5>
                                            <span class="h2 font-weight-bold text-white mb-0">{{ $student->address }}</span>
                                        </div>
                                        <div class="col-auto">
                                            <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                                                <i class="fas fa-calendar-check"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--phones-->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <!-- Table -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <div class="container-fluid">
                                <div class="header-body">
                                    <div class="row align-items-center py-4">
                                        <div class="col-lg-6 col-7">
                                            <h3 class="mb-0">Phones</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush datatable-buttons">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="number">#</th>
                                    <th scope="col" class="sort" data-sort="subject">Phone</th>
                                    <th scope="col" class="sort" data-sort="subject">Type</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($student->phones as $phone)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$phone->phone}}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$phone->type}}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Table -->
                </div>
            </div>
        </div>

        <!-- Subjects -->
        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <!-- Table -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">Subjects</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush datatable-buttons">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="number">#</th>
                                    <th scope="col" class="sort" data-sort="subject">Subject</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                    <tr>
                                        <td class="text-capitalize">
                                            <span class="badge badge-primary text-lg rounded-circle">
                                            </span>
                                        </td>
                                        <td class="text-capitalize">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Table -->
                </div>
            </div>
        </div>
        <!--/ Subjects -->
    </div>
@endsection
