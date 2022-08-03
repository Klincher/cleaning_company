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
        $order = null;

        if ($id = session('order_id')) {
            $order = Order::find($id);
        }

        return view('welcome', ['order' => $order]);
    }

    public function store(Request $request)
    {

        $options = ['area', 'rooms', 'bathrooms', 'kitchens', 'fridges', 'wardrobes', 'animals', 'adults', 'children'];
        $sum = 0;

        foreach ($options as $option) {
            if ($request->filled($option)) {
                $price = Price::where('name', '=', $option)->first()->price;
                $sum += (int) $request->input($option) * $price;
            }
        }

        $client = Client::updateOrCreate(
            ['phone' => $request->phone],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
            ]
        );

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

        session(['order_id' => $order->id]);

        return redirect()->route('result', ['id' => $order->id]);
    }
}
