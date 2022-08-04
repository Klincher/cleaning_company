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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#confirmPayment">Confirm</button>
            </div>
            <div class="col-2">
                <a href="{{ route('welcome') }}">
                    <button class="btn btn-danger">Cancel</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmPayment" tabindex="-1" aria-labelledby="confirmPaymentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmPaymentLabel">Confirm Payment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Are you sure want to complete?</h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#applyPayment">Apply</button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="applyPayment" tabindex="-1" aria-labelledby="applyPaymentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyPaymentLabel">Congratulations</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4>Your payment has been successfully applied!</h4>
            </div>
            <div class="modal-footer">
                <a href="{{ route('clear') }}">
                    <button type=" button" class="btn btn-primary">Okay</button>
                </a>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Back</button>
            </div>
        </div>
    </div>
</div>
@endsection