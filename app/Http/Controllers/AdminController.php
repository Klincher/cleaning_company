<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $clients = Client::orderByDesc('updated_at')->get();
        $orders = Order::orderByDesc('updated_at')->get();

        return view('dashboard', ['clients' => $clients, 'orders' => $orders]);
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
