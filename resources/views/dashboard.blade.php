@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">{{ __('Id') }}</th>
                            <th class="px-4 py-2">{{ __('Phone') }}</th>
                            <th class="px-4 py-2">{{ __('First name') }}</th>
                            <th class="px-4 py-2">{{ __('Last name') }}</th>
                            <th class="px-4 py-2">{{ __('Email') }}</th>
                        </tr>
                    </thead>
                    @foreach ($clients as $client)
                    <tr>
                        <td class="border px-4 py-2">{{ $client->id }}</td>
                        <td class="border px-4 py-2">{{ $client->phone }}</td>
                        <td class="border px-4 py-2">{{ $client->first_name }}</td>
                        <td class="border px-4 py-2">{{ $client->last_name }}</td>
                        <td class="border px-4 py-2">{{ $client->email }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('dashboard.update') }}" method="post">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Id</th>
                                <th class="px-4 py-2">Client Id</th>
                                <th class="px-4 py-2">Status</th>
                                <th class="px-4 py-2">Sum</th>
                                <th class="px-4 py-2">Area</th>
                                <th class="px-4 py-2">Rooms</th>
                                <th class="px-4 py-2">Bathrooms</th>
                                <th class="px-4 py-2">Kitchens</th>
                                <th class="px-4 py-2">Fridges</th>
                                <th class="px-4 py-2">Wardrobes</th>
                                <th class="px-4 py-2">Animals</th>
                                <th class="px-4 py-2">Adults</th>
                                <th class="px-4 py-2">Children</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $order)
                        <tr>
                            <td class="border px-4 py-2">{{ $order->id }}</td>
                            <td class="border px-4 py-2">{{ $order->client_id }}</td>
                            <td class="border px-4 py-2">
                                <select class="form-control" name="status" id="">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status }}" @if ($order->status === $status) selected @endif>{{ $status }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="border px-4 py-2">{{ $order->sum }}</td>
                            <td class="border px-4 py-2">{{ $order->area }}</td>
                            <td class="border px-4 py-2">{{ $order->rooms }}</td>
                            <td class="border px-4 py-2">{{ $order->bathrooms }}</td>
                            <td class="border px-4 py-2">{{ $order->kitchens }}</td>
                            <td class="border px-4 py-2">{{ $order->fridges }}</td>
                            <td class="border px-4 py-2">{{ $order->wardrobes }}</td>
                            <td class="border px-4 py-2">{{ $order->animals }}</td>
                            <td class="border px-4 py-2">{{ $order->adults }}</td>
                            <td class="border px-4 py-2">{{ $order->children }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection