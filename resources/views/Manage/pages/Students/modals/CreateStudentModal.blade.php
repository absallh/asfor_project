<!-- Modal -->
<div class="modal fade" id="createStudent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new student</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{ route('student.store') }}">
                <div class="modal-body text-left">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="first name">first name*</label>
                                    <input type="text" id="first_name" class="form-control name radius @error('first_name') is-invalid @enderror"
                                           value="{{ old('first_name') }}" name="first_name" placeholder="Try John" required>
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="father name">father name*</label>
                                    <input type="text" id="father_name" class="form-control name radius @error('father_name') is-invalid @enderror"
                                           value="{{ old('father_name') }}" name="father_name" placeholder="Try Snow" required>
                                    @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="mother name">mother name</label>
                                    <input type="text" id="mother_name" class="form-control name radius @error('mother_name') is-invalid @enderror"
                                           value="{{ old('mother_name') }}" name="mother_name" placeholder="Try The Mother of dragons">
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
                                           value="{{ old('address') }}" name="address" placeholder="Try shoubra elkhama">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="personuid">National Id*</label>
                                    <input type="number" id="personuid" class="form-control personuid radius @error('personuid') is-invalid @enderror"
                                           value="{{ old('personuid') }}" name="personuid" placeholder="Try john@attendance.com" required>
                                    @error('personuid')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="apply date">apply date</label>
                                    <input class="form-control datepicker  @error('apply_date') is-invalid @enderror " name="apply_date" id="apply_date" placeholder="Select apply date" type="text" value="">
                                    @error('apply_date')
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
