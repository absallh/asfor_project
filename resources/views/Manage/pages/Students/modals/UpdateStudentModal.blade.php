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
                                           value="{{ $student->personuid }}" name="personuid" placeholder="Try john@attendance.com" required>
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
                                           value="{{ $student->first_name }}" name="first_name" placeholder="Try John">
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
                                    <label class="form-control-label" for="student_job">Student Job</label>
                                    <input type="text" id="student_job" class="form-control name radius @error('student_job') is-invalid @enderror"
                                           value="{{ $student->student_job }}" name="student_job" placeholder="Try The Job">
                                    @error('student_job')
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
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="father_job">Father Job</label>
                                    <input type="text" id="father_job" class="form-control name radius @error('father_job') is-invalid @enderror"
                                           value="{{ $student->father_job }}" name="father_job" placeholder="Try Snow">
                                    @error('father_job')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="mother_job">Mother Job</label>
                                    <input type="text" id="mother_job" class="form-control name radius @error('mother_job') is-invalid @enderror"
                                           value="{{ $student->mother_job }}" name="mother_job" placeholder="Try Snow">
                                    @error('mother_job')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="parents_status">Parents Status</label>
                                    <select id="parents_status" name="parents_status"  class="form-control radius">
                                        <option value="">Select Status</option>
                                        <option value="مستقرة" @if ($student->parents_status == 'مستقرة'){{'selected'}} @endif>مستقرة</option>
                                        <option value="منفصلين" @if ($student->parents_status == 'منفصلين'){{'selected'}} @endif>منفصلين</option>
                                        <option value="مطلقين" @if ($student->parents_status == 'مطلقين'){{'selected'}} @endif>مطلقين</option>
                                    </select>
                                    @error('parents_status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="education_type">Education Type</label>
                                    <select id="education_type" name="education_type"  class="form-control radius">
                                        <option value="">Select Type</option>
                                        <option value="عام" @if ($student->education_type == 'عام'){{'selected'}} @endif>عام</option>
                                        <option value="أزهري" @if ($student->education_type == 'أزهري'){{'selected'}} @endif>أزهري</option>
                                    </select>
                                    @error('education_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="school">school</label>
                                    <input type="text" id="school" class="form-control name radius @error('school') is-invalid @enderror"
                                           value="{{ $student->school }}" name="school" placeholder="Try shoubra elkhama">
                                    @error('school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="school_level">School Level</label>
                                    <input type="text" id="school_level" class="form-control name radius @error('school_level') is-invalid @enderror"
                                           value="{{ $student->school_level }}" name="school_level" placeholder="Try shoubra elkhama">
                                    @error('school_level')
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
                                    <input class="form-control datepicker  @error('apply_date') is-invalid @enderror " name="apply_date" id="apply_date" placeholder="Select join date" type="text" value="{{ $student->apply_date }}">
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
                                    <input class="form-control datepicker  @error('call_date') is-invalid @enderror " name="call_date" id="call_date" placeholder="Select join date" type="text" 
                                    value="{{ $student->call_date }}">
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
                                    <input class="form-control datepicker  @error('test_date') is-invalid @enderror " name="test_date" id="test_date" 
                                    placeholder="Select test date" type="text" value="{{ $student->test_date }}">
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
                                    <input class="form-control datepicker  @error('join_date') is-invalid @enderror " name="join_date" id="input-date" placeholder="Select join date" type="text" 
                                    value="{{ $student->join_date }}">
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
                                    <input class="form-control datepicker  @error('leave_at') is-invalid @enderror " name="leave_at" id="input-date" 
                                    placeholder="Select leave at" type="text" value="{{ $student->leave_at }}">
                                    @error('leave_at')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="description">Description</label>
                                    <textarea type="number" id="description" class="form-control description radius @error('description') is-invalid @enderror"
                                              name="description" placeholder="Try 10" rows="6">{{ $student->description }} </textarea>
                                    @error('description')
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
