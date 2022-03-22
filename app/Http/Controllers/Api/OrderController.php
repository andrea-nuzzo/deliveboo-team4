<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function store(Request $request) {
        $data = $request->all();
        $newOrder = new Order();
        $newOrder->first_name = $data['name'];
        $newOrder->last_name = $data['lastName'];
        $newOrder->phone = $data['phone'];
        $newOrder->address = $data['address'];
        $newOrder->total_price = $data['totalPrice'];
        $newOrder->save();
    }
}
