<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders');
    }

    public function store(Request $request)
    {
        // return redirect()->route('orders');
    }
}