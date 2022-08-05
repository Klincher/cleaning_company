<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $client = Client::latest('updated_at')->first();
        $order = Order::latest('updated_at')->first();

        return view('dashboard', ['client' => $client, 'order' => $order]);
    }

    public function update(Request $request)
    {
        // $order = Order::find($request->order_id);
        $order = Order::latest('updated_at')->first();
        $order->status = $request->status;
        $order->save();

        // return response()->json($order->refresh(), 200);

        return redirect()->route('dashboard');
    }
}
