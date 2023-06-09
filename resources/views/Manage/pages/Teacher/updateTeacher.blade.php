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
                        <h6 class="h2 text-white d-inline-block mb-0">Update Teacher</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Update Teacher</a></li>
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
                                                        <label class="form-control-label" for="name">Name</label>
                                                        <input type="text" id="name" class="form-control radius @error('name') is-invalid @enderror"
                                                            value="{{ $teacher->name }}" name="name" placeholder="Enter Teacher name" required>
                                                        @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="salary">salary</label>
                                                        <input type="number" step="0.01" id="salary" class="form-control radius @error('salary') is-invalid @enderror"
                                                            value="{{ $teacher->salary }}" name="salary" placeholder="Enter Teacher salary">
                                                        @error('salary')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="shift_hours">Hhift Hours</label>
                                                        <input type="number" step="0.01" id="shift_hours" class="form-control name radius @error('shift_hours') is-invalid @enderror"
                                                            value="{{ $teacher->shift_hours }}" name="shift_hours" placeholder="Enter shift hours">
                                                        @error('shift_hours')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="join_date">Join Date</label>
                                                        <input class="form-control datepicker  @error('join_date') is-invalid @enderror " 
                                                            name="join_date" id="join_date" placeholder="Select join date" type="text" value="{{ $teacher->join_date }}">
                                                        @error('join_date')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block radius">Update</button>
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
