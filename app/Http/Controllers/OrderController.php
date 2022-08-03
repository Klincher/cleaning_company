<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Price;
use App\Models\Client;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $sum = 0;

        if ($request->filled('area')) {
            $price = Price::where('name', '=', 'area')->first()->price;
            $sum += (int) $request->area * $price;
        }
        if ($request->filled('rooms')) {
            $price = Price::where('name', '=', 'rooms')->first()->price;
            $sum += (int) $request->rooms * $price;
        }
        if ($request->filled('bathrooms')) {
            $price = Price::where('name', '=', 'bathrooms')->first()->price;
            $sum += (int) $request->bathrooms * $price;
        }
        if ($request->filled('kitchens')) {
            $price = Price::where('name', '=', 'kitchens')->first()->price;
            $sum += (int) $request->kitchens * $price;
        }
        if ($request->filled('fridges')) {
            $price = Price::where('name', '=', 'fridges')->first()->price;
            $sum += (int) $request->fridges * $price;
        }
        if ($request->filled('wardrobes')) {
            $price = Price::where('name', '=', 'wardrobes')->first()->price;
            $sum += (int) $request->wardrobes * $price;
        }
        if ($request->filled('animals')) {
            $price = Price::where('name', '=', 'animals')->first()->price;
            $sum += (int) $request->animals * $price;
        }
        if ($request->filled('adults')) {
            $price = Price::where('name', '=', 'adults')->first()->price;
            $sum += (int) $request->adults * $price;
        }
        if ($request->filled('children')) {
            $price = Price::where('name', '=', 'children')->first()->price;
            $sum += (int) $request->children * $price;
        }

        $client = new Client;
        $client->phone = $request->phone;
        $client->first_name = $request->first_name;
        $client->last_name = $request->last_name;
        $client->email = $request->email;
        $client->save();

        $order = new Order;
        $order->client_id = $client->id;
        $order->status = 'created';
        $order->sum = $sum;
        $order->address = $request->address;
        $order->area = $request->area;
        $order->rooms = $request->rooms;
        $order->bathrooms = $request->bathrooms;
        $order->kitchens = $request->kitchens;
        $order->fridges = $request->fridges;
        $order->wardrobes = $request->wardrobes;
        $order->animals = $request->animals;
        $order->adults = $request->adults;
        $order->children = $request->children;
        $order->save();

        return redirect()->route('welcome');
    }
}
