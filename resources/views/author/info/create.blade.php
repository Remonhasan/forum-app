@extends('layouts.backend.app')

@section('title','Userinfo')

@push('css')
@endpush

@section('content')
    <div class="container-fluid">
        <!-- Vertical Layout | With Floating Label -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ADD NEW USER INFO. ENTRY
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{route('author.info.store')}}" method="POST">
                            @csrf
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="bdstatus" class="form-control" name="bdstatus">
                                    <label class="form-label">Born/Death</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="mname" class="form-control" name="mname">
                                    <label class="form-label">Mother Name</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="rname" class="form-control" name="rname">
                                    <label class="form-label">Relation</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="gender" class="form-control" name="gender">
                                    <label class="form-label">Gender</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="phone" class="form-control" name="phone">
                                    <label class="form-label">Phone Number</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="age" class="form-control" name="age">
                                    <label class="form-label">Age</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="division" class="form-control" name="division">
                                    <label class="form-label">Division</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="district" class="form-control" name="district">
                                    <label class="form-label">District</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="upazila" class="form-control" name="upazila">
                                    <label class="form-label">Upazila</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="psova" class="form-control" name="psova">
                                    <label class="form-label">Pourosova</label>
                                </div>
                            </div>
                          
                            <br>
                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('author.info.index') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vertical Layout | With Floating Label -->


    </div>
@endsection

@push('js')
@endpush
