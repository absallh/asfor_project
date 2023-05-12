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
                                    <label class="form-control-label" for="name">Name*</label>
                                    <input type="text" id="name" class="form-control name radius @error('name') is-invalid @enderror"
                                           value="{{ $student->name }}" name="name" placeholder="Try John Snow" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
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
                                    <label class="form-control-label" for="leave_at">Join Date</label>
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
