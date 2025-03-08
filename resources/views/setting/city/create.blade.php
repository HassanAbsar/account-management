@extends('layouts.app')
@section('title')
    CITY/AREA CREATE
@endsection
@section('button')
<a type="button" class="btn btn-primary" href="{{ route('city.index') }}">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
@endsection
@section('content')
    <div class="card">
        <form method="post" action="{{ route('city.store') }}">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-12">
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ old('name') }}" placeholder="Enter Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="d-flex  justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>
            </div>
        
        </form>
    </div>
@endsection
