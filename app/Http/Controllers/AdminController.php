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

// dd($clients);

        return view('dashboard', ['client' => $client, 'order' => $order]);
    }
}
