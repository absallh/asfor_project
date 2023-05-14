<!-- Modal -->
<div class="modal fade" id="updateStudent-{{ $student->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Student: {{ $student->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('student.update', $student) }}">
                <div class="modal-body text-left">
                    @csrf
                    @method('PUT')
                        <!--<h6 class="heading-small text-muted mb-4">Student information</h6>-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="nationalid">National Id*</label>
                                    <input type="text" id="nationalid" class="form-control email radius @error('personuid') is-invalid @enderror"
                                           value="{{ $student->personuid }}" name="nationalid" placeholder="Try john@attendance.com" required>
                                    @error('personuid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="First Name">First Name*</label>
                                    <input type="text" id="first_name" class="form-control name radius @error('first_name') is-invalid @enderror"
                                           value="{{ $student->first_name }}" name="first_name" placeholder="Try John" required>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="Father Name">Father Name*</label>
                                    <input type="text" id="father_name" class="form-control name radius @error('father_name') is-invalid @enderror"
                                           value="{{ $student->father_name }}" name="father_name" placeholder="Try John" required>
                                    @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="Mother Name">Mother Name</label>
                                    <input type="text" id="mother_name" class="form-control name radius @error('mother_name') is-invalid @enderror"
                                           value="{{ $student->mother_name }}" name="mother_name" placeholder="Try The Mother of dragons">
                                    @error('mother_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="address">address</label>
                                    <input type="text" id="address" class="form-control name radius @error('address') is-invalid @enderror"
                                           value="{{ $student->address }}" name="address" placeholder="Try Shubra">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="Apply Date">Apply Date</label>
                                    <input class="form-control datepicker  @error('apply_date') is-invalid @enderror " name="apply_date" id="apply_date" placeholder="Select join date" type="text" value="{{ \Carbon\Carbon::today()->format('m/d/Y') }}">
                                    @error('apply_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="Call Date">Call Date</label>
                                    <input class="form-control datepicker  @error('apply_date') is-invalid @enderror " name="call_date" id="call_date" placeholder="Select join date" type="text">
                                    @error('call_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="call_ruslt">call_ruslt</label>
                                    <input type="text" id="call_ruslt" class="form-control name radius @error('call_ruslt') is-invalid @enderror"
                                           value="{{ $student->call_ruslt }}" name="call_ruslt" placeholder="Try Shubra">
                                    @error('call_ruslt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                   <label class="form-control-label" for="test date">test date</label>
                                    <input class="form-control datepicker  @error('test_date') is-invalid @enderror " name="test_date" id="test_date" placeholder="Select test date" type="text">
                                    @error('test_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="test_ruslt">test_ruslt</label>
                                    <input type="text" id="test_ruslt" class="form-control name radius @error('test_ruslt') is-invalid @enderror"
                                           value="{{ $student->test_ruslt }}" name="test_ruslt" placeholder="Try Shubra">
                                    @error('test_ruslt')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="join_date">Join Date</label>
                                    <input class="form-control datepicker  @error('join_date') is-invalid @enderror " name="join_date" id="input-date" placeholder="Select join date" type="text" value="{{ \Carbon\Carbon::today()->format('m/d/Y') }}">
                                    @error('join_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="leave_at">Leave Date</label>
                                    <input class="form-control datepicker  @error('leave_at') is-invalid @enderror " name="leave_at" id="input-date" placeholder="Select leave at" type="text" value="{{ $student->leave_at }}">
                                    @error('leave_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary radius" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary radius">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
