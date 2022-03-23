<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;
use App\Order;
use Braintree\Gateway;
use Illuminate\Support\Facades\Validator;
use App\Rules\ValidOrder;

class OrderController extends Controller
{
    public function makePayment(Request $request, Gateway $gateway) 
    {
        $validator = Validator::make($request->all(), [
            'tokenClient' => ['required'],
            'dishes' => ['required', new ValidOrder],
            'client.name' => ['required', 'string', 'max:100'],
            'client.lastName' => ['required', 'string', 'max:100'],
            'client.address' => ['required', 'string', 'max:255'],
            'client.phone' => ['nullable', 'numeric', 'digits_between:8,15']
        ]);

        if ($validator->fails()) {
            return response()->json([
                "success" => false,
                "errors" => $validator->errors()
            ], 400);
        }

        $data = $request->all();

        $dishes = $data['dishes'];
        $dish = Dish::find($dishes[0]['id']);
        $user = $dish->user;

        $total = 0;

        foreach ($dishes as $dish) {
            $total += Dish::find($dish['id'])->price * $dish['quantity'];
        }
       
        $result = $gateway->transaction()->sale([
            'amount' => $total,
            'paymentMethodNonce' => $data['tokenClient'],
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {

            $newOrder = new Order();

            $newOrder->first_name = $data['client']['name'];
            $newOrder->last_name  = $data['client']['lastName'];
            $newOrder->address = $data['client']['address'];
            $newOrder->phone = $data['client']['phone'];
            $newOrder->total_price = $total;
            // $newOrder->user_id = $user->id;
            $newOrder->save();
       
            foreach ($dishes as $dish) {
                $newOrder->dishes()->attach($dish["id"], ['quantity' => $dish["quantity"]]);
            }

            $data = [
                'success' => true,
                'message' => "Transazione eseguita con Successo!"
            ];

            return response()->json($data, 200);

        } else {
            $data = [
                'success' => false,
                'message' => "Transazione Fallita!!"
            ];
            return response()->json($data, 401);
        }
        
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
