@extends('layouts.app')
@section('title')
    CITY/AREA VIEW
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-12">
                    <div class="mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" class="form-control" id="name" disabled name="name"
                            value="{{ $city->name }}" placeholder="Enter Name">
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex gap-2 justify-content-start">
            <a type="button" class="btn btn-info" href="{{ route('city.index') }}">
                <i class="bi bi-arrow-left"></i> Back
            </a>
        </div>
    </div>
@endsection
