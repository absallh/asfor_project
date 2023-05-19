@extends('Show.layouts.app')

@section('content')
    <div class="main-content" id="panel">
    @include('Show.includes.header')
    <!-- Header -->
        <div class="header bg-primary">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"> <a href="{{ route('dashboard') }}">Students</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-users-class"></i></li>
                                    <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-neutral"><i class="fa fa-home" aria-hidden="true"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-4">
            <div class="row">
                <div class="col-12">
                    <!-- Table -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header border-0">
                            <h3 class="mb-0">{{ $subTitle }}</h3>
                        </div>
                        <!-- Light table -->
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush datatable-buttons">
                                <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="employee">#</th>
                                    <th scope="col" class="sort" data-sort="employee">National Id</th>
                                    <th scope="col" class="sort" data-sort="employee">Name</th>
                                    <th scope="col" class="sort" data-sort="employee">Mother Name</th>
                                    <th scope="col" class="sort" data-sort="service">Address</th>
                                    <th scope="col" class="sort" data-sort="service">Join date</th>
                                    <th scope="col" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="text-md">
                                            {{ $student->id }}
                                        </td>
                                        <td class="text-md">
                                            {{ $student->personuid }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $student->first_name }} {{ $student->father_name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $student->mother_name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $student->address }}
                                        </td>
                                        <td class="text-md">
                                            {{ $student->join_date }}
                                        </td>
                                        <td>
                                            <a href="{{ route('show.student.show', $student) }}" class="btn btn-sm bg-blue-500 text-white m-0 radius" title="Show">
                                                <i class="fas fa-eye" aria-hidden="true"></i>
                                            </a>
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
    </div>
@endsection
@push('scripts')

@endpush
