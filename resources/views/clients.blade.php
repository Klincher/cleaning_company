@extends('layouts.app')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="col-3">
            <form method="POST" action="{{ route('clients.store') }}">
                @csrf

                <label for="phone">Phone</label>
                <input class="form-control" type="text" name="phone" required placeholder="enter Phone">
                <label for="phone">First Name</label>
                <input class="form-control" type="text" name="first_name" required placeholder="enter First Name">
                <label for="phone">Last Name</label>
                <input class="form-control" type="text" name="last_name" required placeholder="ente Last Name">
                <label for="phone">Email</label>
                <input class="form-control" type="email" name="email" required placeholder="enter Email">
                <div class="d-flex justify-content-center">
                    <button class="btn btn-primary" type="submit" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection