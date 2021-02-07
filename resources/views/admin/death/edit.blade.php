@extends('layouts.backend.app')

@section('title','Death')

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
                            EDIT DEATH ENTRY
                        </h2>
                    </div>
                    <div class="body">
                        <form action="{{ route('admin.death.update',$death->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $death->name }}">
                                    <label class="form-label">Birth Name</label>
                                </div>
                                <div class="form-line">
                                    <input type="text" id="date" class="form-control" name="date" value="{{ $death->date }}">
                                    <label class="form-label">Birth Date</label>
                                </div>
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect" href="{{ route('admin.death.index') }}">BACK</a>
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
