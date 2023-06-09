@extends('Manage.layouts.app')
@section('content')
    <!-- Main content -->
    <div class="main-content" id="panel">
    @include('Manage.includes.header')
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
                                    <li class="breadcrumb-item"><a href="{{ route('student.index') }}">Students</a></li>
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
                            <span class="h2 font-weight-bold mb-0">@if (is_null($student->mother_name)) {{'N/A'}}  @endif{{ $student->mother_name }}</span>
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
                                            <h5 class="card-title text-uppercase text-white mb-0">{{$date[0]}}</h5>
                                            <span class="h2 font-weight-bold text-white mb-0">{{ $date[1]}}</span>
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
                <div class="col-md-3">
                    <div class="card bg-gradient-default radius shadow-2xl">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-white mb-0">Student Job</h5>
                                    <span class="h2 font-weight-bold text-white mb-0">{{ $student->student_job }}</span>
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
                <div class="col-md-3">
                    <div class="card bg-gradient-default radius shadow-2xl">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-white mb-0">Father Job</h5>
                                    <span class="h2 font-weight-bold text-white mb-0">@if (is_null($student->father_job)) {{'N/A'}}  @endif{{ $student->father_job }}</span>
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
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-gray-100 radius shadow-2xl">
                            <h5 class="card-title text-uppercase mb-0">Mother Job</h5>
                            <span class="h2 font-weight-bold mb-0">@if (is_null($student->mother_job)) {{'N/A'}}  @endif{{ $student->mother_job }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-gray-100 radius shadow-2xl">
                            <h5 class="card-title text-uppercase mb-0">Parents Status</h5>
                            <span class="h2 font-weight-bold mb-0">@if (is_null($student->parents_status)) {{'N/A'}}  @endif{{ $student->parents_status }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body bg-gray-100 radius shadow-2xl">
                            <h5 class="card-title text-uppercase mb-0">education type</h5>
                            <span class="h2 font-weight-bold mb-0">@if (is_null($student->education_type)) {{'N/A'}}  @endif{{ $student->education_type }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body bg-gray-100 radius shadow-2xl">
                            <h5 class="card-title text-uppercase mb-0">school</h5>
                            <span class="h2 font-weight-bold mb-0">@if (is_null($student->school)) {{'N/A'}}  @endif{{ $student->school }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-gradient-default radius shadow-2xl">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-white mb-0">school level</h5>
                                    <span class="h2 font-weight-bold text-white mb-0">@if (is_null($student->school_level)) {{'N/A'}}  @endif{{ $student->school_level }}</span>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body bg-gray-100 radius shadow-2xl">
                            <h5 class="card-title text-uppercase mb-0">Description</h5>
                            <span class="h2 font-weight-bold mb-0">@if (is_null($student->description)) {{'N/A'}}  @endif{{ $student->description }}</span>
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
                                        <div class="col-lg-6 col-5 text-right">
                                            <button onclick="location.href='{{ route('student.addPhone', $student) }}';"
                                            class="btn btn-sm btn-neutral"  data-toggle="modal" data-target="#createStudent"><i class="fas fa-plus mr-1"> </i> New</button>
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
                                    <th scope="col" class="sort" data-sort="action">Action</th>
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
                                        <td>
                                            <button onclick="location.href = '{{ route('student.phone.update', ['phone'=>$phone, 'student'=>$student->id]) }}';" class="btn btn-sm bg-green-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </button>
                                            <!-- Update Class Modal -->
                                        <!--/ Update Class Modal -->
                                            <form action="{{ route('student.phone.destroy', ['phone'=>$phone, 'student'=>$student->id]) }}" class="d-inline" method="post">
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
                                    <th scope="col" class="sort" data-sort="subject">Teacher Id</th>
                                    <th scope="col" class="sort" data-sort="subject">Join Date</th>
                                    <th scope="col" class="sort" data-sort="subject">Leave Date</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($student->subjects as $subject)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $subject->name }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{ $subject->employee_id }}
                                        </td>
                                        <td class="text-capitalize">
                                            @if (!is_null($subject->pivot->join_at)) {{ date('d/m/Y', strtotime($subject->pivot->join_at)) }}  @endif
                                        </td>
                                        <td class="text-capitalize">
                                            @if (!is_null($subject->pivot->leave_at)) {{ date('d/m/Y', strtotime($subject->pivot->leave_at)) }}  @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('subject.show', $subject) }}" class="btn btn-sm bg-blue-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ route('subject.assign-student', $subject) }}" class="btn btn-sm bg-yellow-500 text-white m-0 radius" title="Assign Students">
                                                <i class="fas fa-users-class" aria-hidden="true"></i>
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
        <!--/ Subjects -->
        <!--Exceptions-->
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
                                            <h3 class="mb-0">Exeptions</h3>
                                        </div>
                                        <div class="col-lg-6 col-5 text-right">
                                            <button onclick="location.href='{{ route('student.addException', $student) }}';"
                                            class="btn btn-sm btn-neutral"  data-toggle="modal" data-target="#createStudent"><i class="fas fa-plus mr-1"> </i> New</button>
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
                                    <th scope="col" class="sort" data-sort="subject">Reason</th>
                                    <th scope="col" class="sort" data-sort="subject">Reciving Date</th>
                                    <th scope="col" class="sort" data-sort="subject">Start Date</th>
                                    <th scope="col" class="sort" data-sort="subject">End Date</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($exceptions as $exception)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$exception->reason}}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$exception->reciving_date->format('d/m/Y')}}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$exception->start_date->format('d/m/Y')}}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$exception->end_date->format('d/m/Y')}}
                                        </td>
                                        <td>
                                            <button onclick="location.href = '{{ route('student.updateException', ['exception'=>$exception, 'student'=>$student->id]) }}';" class="btn btn-sm bg-green-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </button>
                                            <!-- Update Class Modal -->
                                        <!--/ Update Class Modal -->
                                            <form action="{{ route('student.Exception.destroy', ['exceptions'=>$exception, 'student'=>$student->id]) }}" class="d-inline" method="post">
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
        <!--/ Exception -->
        <!--Warning-->
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
                                            <h3 class="mb-0">Warnings</h3>
                                        </div>
                                        <div class="col-lg-6 col-5 text-right">
                                            <button onclick="location.href='{{ route('student.addWarning', $student) }}';"
                                            class="btn btn-sm btn-neutral"  data-toggle="modal" data-target="#createStudent"><i class="fas fa-plus mr-1"> </i> New</button>
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
                                    <th scope="col" class="sort" data-sort="subject">Reason</th>
                                    <th scope="col" class="sort" data-sort="subject">Date</th>
                                    <th scope="col" class="sort" data-sort="action">Action</th>
                                </tr>
                                </thead>
                                <tbody class="list">
                                @foreach ($warnings as $exception)
                                    <tr>
                                        <td class="text-capitalize">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$exception->reason}}
                                        </td>
                                        <td class="text-capitalize">
                                            {{$exception->reciving_date->format('d/m/Y')}}
                                        </td>
                                        <td>
                                            <button onclick="location.href = '{{ route('student.updateWarning', ['exception'=>$exception, 'student'=>$student->id]) }}';" class="btn btn-sm bg-green-500 text-white m-0 radius" title="edit">
                                                <i class="fas fa-edit" aria-hidden="true"></i>
                                            </button>
                                            <!-- Update Class Modal -->
                                        <!--/ Update Class Modal -->
                                            <form action="{{ route('student.Exception.destroy', ['exceptions'=>$exception->id, 'student'=>$student->id]) }}" class="d-inline" method="post">
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
        <!--/ Warning -->
    </div>
@endsection
