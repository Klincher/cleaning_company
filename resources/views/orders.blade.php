@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-3">
            <form method="POST" action="{{ route('orders.store') }}">
                @csrf

                <label for="address">Address</label>
                <input class="form-control" type="text" name="address" required placeholder="enter Address">

                <label for="area">Area</label>
                <input class="form-control" type="number" name="area" required placeholder="enter Area">

                <label for="rooms">Rooms</label>
                <select class="form-control" name="rooms">
                    <option>1 room</option>
                    <option>2 rooms</option>
                    <option>3 rooms</option>
                    <option>4 rooms</option>
                    <option>5 rooms</option>
                    <option>6 rooms</option>
                    <option>7 rooms</option>
                    <option>8 rooms</option>
                    <option>9 rooms</option>
                    <option>10 rooms</option>
                </select>

                <label for="bathrooms">Bathrooms</label>
                <select class="form-control" name="bathrooms">
                    <option>1 bathroom</option>
                    <option>2 bathrooms</option>
                    <option>3 bathrooms</option>
                    <option>4 bathrooms</option>
                    <option>5 bathrooms</option>
                </select>

                <label for="kitchens">Kitchens</label>
                <select class="form-control" name="kitchens">
                    <option>1 kitchen</option>
                    <option>2 kitchens</option>
                    <option>3 kitchens</option>
                    <option>4 kitchens</option>
                    <option>5 kitchens</option>
                </select>

                <label for="fridges">Fridges</label>
                <select class="form-control" name="fridges">
                    <option>1 fridge</option>
                    <option>2 fridges</option>
                    <option>3 fridges</option>
                </select>

                <label for="wardrobes">Wardrobes</label>
                <select class="form-control" name="wardrobes">
                    <option>1 wardrobe</option>
                    <option>2 wardrobes</option>
                    <option>3 wardrobes</option>
                </select>

                <label for="animals">Animals</label>
                <input class="form-control" type="number" name="animals" required placeholder="ente Animals">

                <label for="adults">Adults</label>
                <input class="form-control" type="number" name="adults" required placeholder="ente Adults">

                <label for="children">Children</label>
                <input class="form-control" type="number" name="children" required placeholder="ente Children">

                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection