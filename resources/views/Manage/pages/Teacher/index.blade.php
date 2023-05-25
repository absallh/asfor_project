@extends('Manage.layouts.app')
@section('content')
    <div class="main-content" id="panel">
    @include('Manage.includes.header')
    <!-- Header -->
        <div class="header bg-primary">
            <div class="container-fluid">
                <div class="header-body">
                    <div class="row align-items-center py-4">
                        <div class="col-lg-6 col-7">
                            <h6 class="h2 text-white d-inline-block mb-0"> <a href="{{ route('dashboard') }}">Teachers</a></h6>
                            <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                                <ol class="breadcrumb breadcrumb-links breadcrumb-dark radius">
                                    <li class="breadcrumb-item"><i class="fas fa-users-class"></i></li>
                                    <li class="breadcrumb-item active">{{ $pageTitle }}</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <button class="btn btn-sm btn-neutral"  data-toggle="modal" data-target="#createTeacher" onclick="document.location.href='{{route('teacher.addTeacher')}}';"><i class="fas fa-plus mr-1"> </i> New</button>
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
                                    <th scope="col" class="sort" data-sort="employee">Name</th>
                                    <th scope="col" class="sort" data-sort="employee">Salary</th>
                                    <th scope="col" class="sort" data-sort="employee">Shift Hours</th>
                                    <th scope="col" class="sort" data-sort="employee">Join Date</th>
                                    <th scope="col" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($teachers as $teacher)
                                    <tr>
                                        <td class="text-md">
                                            {{ $teacher->id }}
                                        </td>
                                        <td class="text-md">
                                            {{ $teacher->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $teacher->salary }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $teacher->shift_hours }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $teacher->join_date }}
                                        </td>
                                        <td>
                                            <button data-toggle="modal" data-target="#updateTeacher-{{ $teacher->id }}"
                                                class="btn btn-sm bg-green-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </button>
                                            <a href="{{ route('teacher.show', $teacher) }}" class="btn btn-sm bg-blue-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <form action="{{ route('teacher.destroy', $teacher) }}" class="d-inline" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-sm bg-red-500 text-white radius" title="delete">
                                                    <i class="fas fa-trash" aria-hidden="true"></i>
                                                </button>
                                            </form>
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
