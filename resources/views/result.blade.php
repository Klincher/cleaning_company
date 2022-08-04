@extends('layouts.app')

@section('content')
<div>
    <div class="d-flex justify-content-center">
        <h2>Price: {{ $sum }}</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col-2">
                <button class="btn btn-primary">Confirm</a></button>
            </div>
            <div class="col-2">
                <a href="{{ route('welcome') }}">
                    <button class="btn btn-danger">Cancel</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection