@extends('show.layouts.app')

@section('content')
    <div class="main-content" id="panel">
    @include('show.includes.header')
        <!-- Header -->
        <div class="header bg-primary pb-6">
                <div class="container-fluid">
                    <div class="header-body">
                        <div class="row align-items-center py-4">
                            <div class="col-lg-6 col-7">
                                <h6 class="h2 text-white d-inline-block mb-0">Show</h6>
                                <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                    <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                        <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                        <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                        <!-- Card stats -->
                        
                    </div>
                </div>
            </div>
        <!--/ Header -->
        <div class="container-fluid mt--6 ">
                <div class="row">
                    <div class="col col-lg-12">
                        <div class="card radius shadow-2xl">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <h3 class="mb-0">Search</h3>
                                    </div>
                                    <div class="col-4 text-right">
                                        <i class="fas fa-calendar-plus"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body radius shadow-2xl">
                                <form method="post" action="{{ route('search') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="subject">Select Subject*</label>
                                                <select id="subject" name="model_name"  class="form-control radius">
                                                    <option value="Student">Student</option>
                                                    <option value="Employee">Teacher</option>
                                                    <option value="Classe">Class</option>
                                                    <option value="Subject">Subject</option>
                                                </select>
                                                @error('model_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-control-label" for="search_key">Search Key*</label>
                                                <input class="form-control  @error('search_key') is-invalid @enderror " name="search_key" id="input-text" placeholder="Search key" type="text">
                                                @error('search_key')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pl-lg-4">
                                        <div class="row">
                                            <button type="submit" class="btn btn-primary btn-lg btn-block radius">Start Attendance</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <!-- Page Content -->


@endsection
