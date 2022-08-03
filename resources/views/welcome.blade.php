@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6">

                <label for="phone">Phone</label>
                <input class="form-control" style="height: 30px" type="text" name="phone" required
                    placeholder="enter Phone">
                <label for="phone">First Name</label>
                <input class="form-control" style="height: 30px" type="text" name="first_name" required
                    placeholder="enter First Name">
                <label for="phone">Last Name</label>
                <input class="form-control" style="height: 30px" type="text" name="last_name" required
                    placeholder="ente Last Name">
                <label for="phone">Email</label>
                <input class="form-control" style="height: 30px" type="email" name="email" required
                    placeholder="enter Email">
            </div>

            <div class="col-md-6">
                <label for="address">Address</label>
                <input class="form-control" style="height: 30px" type="text" name="address" required
                    placeholder="enter Address">

                <label for="area">Area</label>
                <input class="form-control" style="height: 30px" type="number" name="area" required
                    placeholder="enter Area">

                <label for="rooms">Rooms</label>
                <select class="form-control" name="rooms">
                    <option value="1">1 room</option>
                    <option value="2">2 rooms</option>
                    <option value="3">3 rooms</option>
                    <option value="4">4 rooms</option>
                    <option value="5">5 rooms</option>
                    <option value="6">6 rooms</option>
                    <option value="7">7 rooms</option>
                    <option value="8">8 rooms</option>
                    <option value="9">9 rooms</option>
                    <option value="10">10 rooms</option>
                </select>

                <label for="bathrooms">Bathrooms</label>
                <select class="form-control" name="bathrooms">
                    <option value="0.5">Toilet</option>
                    <option value="1">Bathroom</option>
                    <option value="1.5">Combined bathroom</option>
                </select>

                <label for="kitchens">Kitchens</label>
                <select class="form-control" name="kitchens">
                    <option value="1">1 kitchen</option>
                    <option value="2">2 kitchens</option>
                    <option value="3">3 kitchens</option>
                    <option value="4">4 kitchens</option>
                    <option value="5">5 kitchens</option>
                </select>

                <label for="fridges">Fridges</label>
                <input class="form-control" style="height: 30px" type="number" name="fridges" required
                    placeholder="enter Fridges">

                <label for="wardrobes">Wardrobes</label>
                <input class="form-control" style="height: 30px" type="number" name="wardrobes" required
                    placeholder="enter Wardrobes">

                <label for="animals">Animals</label>
                <input class="form-control" style="height: 30px" type="number" name="animals" required
                    placeholder="enter Animals">

                <label for="adults">Adults</label>
                <input class="form-control" style="height: 30px" type="number" name="adults" required
                    placeholder="enter Adults">

                <label for="children">Children</label>
                <input class="form-control" style="height: 30px" type="number" name="children" required
                    placeholder="enter Children">

                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="d-flex justify-content-start">
                                <button class="btn btn-primary" type="submit" name="save">Calculate order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection