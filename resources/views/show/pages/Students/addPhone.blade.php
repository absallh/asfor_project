@extends('Show.layouts.app')
@section('content')
<!-- Main content -->
<div class="main-content" id="panel">
    <!-- Header -->
    @include('Show.includes.header')
    <!--/ Header -->
    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Add Phone</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                            class="fas fa-home"></i></a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Add Phone</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$student->id}}</li>
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
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="phone">Phone</label>
                                                        <input type="tel" id="phone" class="form-control name radius @error('phone') is-invalid @enderror"
                                                            value="" name="phone" placeholder="Enter Phone Number" maxlength="11" minlength="11">
                                                        @error('phone')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <input type="hidden" name="student_id" value="{{ $student->id }}">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="type">Type</label>
                                                        <input type="text" id="type" class="form-control name radius @error('type') is-invalid @enderror"
                                                            value="" name="type" placeholder="Enter Phone Type">
                                                        @error('type')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                        @enderror
                                                    </div>
                                                </div>
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
