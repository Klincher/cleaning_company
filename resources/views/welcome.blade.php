@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <label for="phone">Phone</label>
                <input class="form-control @error('phone') is-invalid @enderror" style="height: 30px" type="text"
                    name="phone" required placeholder="enter Phone" @if (!empty($order))
                    value="{{ $order->client->phone }}" @endif>
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="first_name">First Name</label>
                <input class="form-control @error('first_name') is-invalid @enderror" style="height: 30px" type="text"
                    name="first_name" required placeholder="enter First Name" @if (!empty($order))
                    value="{{ $order->client->first_name }}" @endif>
                @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="last_name">Last Name</label>
                <input class="form-control @error('last_name') is-invalid @enderror" style="height: 30px" type="text"
                    name="last_name" required placeholder="ente Last Name" @if (!empty($order))
                    value="{{ $order->client->last_name }}" @endif>
                @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="email">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" style="height: 30px" type="email"
                    name="email" required placeholder="enter Email" @if (!empty($order))
                    value="{{ $order->client->email }}" @endif>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>

            <div class="col-md-6">
                <label for="address">Address</label>
                <input class="form-control @error('address') is-invalid @enderror" style="height: 30px" type="text"
                    name="address" required placeholder="enter Address" @if (!empty($order))
                    value="{{ $order->address }}" @endif>
                @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="area">Area</label>
                <input class="form-control @error('area') is-invalid @enderror" style="height: 30px" type="number"
                    name="area" required placeholder="enter Area" @if (!empty($order)) value="{{ $order->area }}"
                    @endif>
                @error('area')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="rooms">Rooms</label>
                <select class="form-control" name="rooms">
                    @foreach ($rooms as $key => $room)
                    <option value="{{ $key + 1 }}" @if (!empty($order) && $order->rooms === $key + 1) selected
                        @endif>{{ $room }}</option>
                    @endforeach
                </select>

                <label for="bathrooms">Bathrooms</label>
                <select class="form-control" name="bathrooms">
                    @foreach ($bathrooms as $key => $bathroom)
                    <option value="{{ $key }}" @if (!empty($order) && $order->bathrooms === floatval($key)) selected
                        @endif>{{ $bathroom }}</option>
                    @endforeach
                </select>

                <label for="kitchens">Kitchens</label>
                <select class="form-control" name="kitchens">
                    @foreach ($kitchens as $key => $kitchen)
                    <option value="{{ $key + 1 }}" @if (!empty($order) && $order->kitchens === $key + 1) selected
                        @endif>{{ $kitchen }}</option>
                    @endforeach
                </select>

                <label for="fridges">Fridges</label>
                <input class="form-control" style="height: 30px" type="number" name="fridges"
                    placeholder="enter Fridges" @if (!empty($order)) value="{{ $order->fridges }}" @endif>

                <label for="wardrobes">Wardrobes</label>
                <input class="form-control" style="height: 30px" type="number" name="wardrobes"
                    placeholder="enter Wardrobes" @if (!empty($order)) value="{{ $order->wardrobes }}" @endif>

                <label for="animals">Animals</label>
                <input class="form-control" style="height: 30px" type="number" name="animals"
                    placeholder="enter Animals" @if (!empty($order)) value="{{ $order->animals }}" @endif>

                <label for="adults">Adults</label>
                <input class="form-control" style="height: 30px" type="number" name="adults" placeholder="enter Adults"
                    @if (!empty($order)) value="{{ $order->adults }}" @endif>

                <label for="children">Children</label>
                <input class="form-control" style="height: 30px" type="number" name="children"
                    placeholder="enter Children" @if (!empty($order)) value="{{ $order->children }}" @endif>

                <div class="container">
                    <div class="row">
                        <div class="col-md-4 mt-2">
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-primary" type="submit" name="save">Calculate order</button>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="d-flex justify-content-center">
                                <h4>Price: @if (!empty($order)) {{ $order->sum }} @endif</h4>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="d-flex justify-content-end">
                                <h4>Status: @if (!empty($order)) {{ $order->status }} @endif</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection