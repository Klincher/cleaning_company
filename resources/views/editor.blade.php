@extends('layouts.app')

@section('content')

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">

                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">{{ __('Id') }}</th>
                            <th class="px-4 py-2">{{ __('Name') }}</th>
                            <th class="px-4 py-2">{{ __('Price') }}</th>
                        </tr>
                    </thead>
                    @foreach ($prices as $price)
                    <tr>
                        <td class="border px-4 py-2">{{ $price->id }}</td>
                        <td class="border px-4 py-2">{{ $price->name }}</td>
                        <form action="{{ route('editor.update') }}" method="post" id="{{ 'priceUpdate' . $price->id }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $price->id }}">
                            <td class="border px-4 py-2"><input class="form-control" type="number" name="price"
                                    value="{{ $price->price }}" click="$('#{{ 'priceUpdate' . $price->id}}').submit()"></td>
                        </form>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </div>
</div>

@endsection