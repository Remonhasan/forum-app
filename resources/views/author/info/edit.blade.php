@extends('layouts.backend.app')

@section('title','Info')

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
                            EDIT Info 
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('author.info.update',$info->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="bdstatus" class="form-control" name="name" value="{{ $info->bdstatus }}">
                                    <label class="form-label">Born/Death</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="fname" class="form-control" name="fname" value="{{ $info->fname }}">
                                    <label class="form-label">Father Name</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="mname" class="form-control" name="mname" value="{{ $info->mname }}">
                                    <label class="form-label">Mother Name</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="rname" class="form-control" name="rname" value="{{ $info->rname }}">
                                    <label class="form-label">Relation</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="gender" class="form-control" name="gender" value="{{ $info->gender }}">
                                    <label class="form-label">Gender</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="phone" class="form-control" name="phone" value="{{ $info->phone }}">
                                    <label class="form-label">Phone Number</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="age" class="form-control" name="age" value="{{ $info->age }}">
                                    <label class="form-label">Age</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="division" class="form-control" name="division" value="{{ $info->division }}">
                                    <label class="form-label">Division</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="district" class="form-control" name="district" value="{{ $info->district }}">
                                    <label class="form-label">District</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="upazila" class="form-control" name="upazila" value="{{ $info->upazila }}">
                                    <label class="form-label">Upazila</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="psova" class="form-control" name="psova" value="{{ $info->psova }}">
                                    <label class="form-label">Pourosova</label>
                                </div>
                            </div>

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
