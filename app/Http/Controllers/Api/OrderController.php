<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Braintree\Gateway;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
     public function makePayment(Request $request, Gateway $gateway) {

       
        $data = [
            'success' => true,
            'message' => "Transazione eseguita con Successo!"
        ];
        return response()->json($data, 200);
    }

    public function generate(Request $request, Gateway $gateway)
    {
        $token = $gateway->clientToken()->generate();

        $data = [
            'success' => true,
            'token' => $token
        ];

        return response()->json($data, 200);
    }
}
