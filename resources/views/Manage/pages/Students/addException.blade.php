@extends('Manage.layouts.app')
@section('content')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Header -->
    @include('Manage.includes.header')
    <!--/ Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Add Exception</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">{{$student->id}}</li>
                                <li class="breadcrumb-item"><a href="">Add Exception</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
        <div class="card radius">
            <div class="row card-body justify-content-center bg-gray-100 radius">
                <div class="col-md-12 card shadow">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="general" role="tabpanel"
                                aria-labelledby="general-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="" method="POST" role="form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="reason">Reason</label>
                                                        <input type="text" id="reason" class="form-control name radius @error('reason') is-invalid @enderror"
                                                            value="" name="reason" placeholder="Enter reason Number" required>
                                                        @error('reason')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="Reciving date">Reciving Date</label>
                                                        <input class="form-control datepicker  @error('reciving_date') is-invalid @enderror " name="reciving_date" id="reciving_date" placeholder="Select reaciving date" type="text" value="" required>
                                                        @error('reciving_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="apply date">Start Date</label>
                                                        <input class="form-control datepicker  @error('start_date') is-invalid @enderror " name="start_date" id="start_date" placeholder="Select start date" type="text" value="" required>
                                                        @error('start_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="apply date">End Date</label>
                                                        <input class="form-control datepicker  @error('end_date') is-invalid @enderror " name="end_date" id="end_date" placeholder="Select end date" type="text" value="" required>
                                                        @error('end_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <input type="hidden" name="student_id" value="{{ $student->id }}">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block radius">Add</button>
                                        </form>
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
@endsection
