<?php

namespace App\Http\Controllers\Admin;

use App\Dish;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
    //     //Prendo l'id dell'utente loggato
        $idLog = Auth::id();

        // Recupero tutti i dati dell'utente loggato
        $user = DB::table('users')->where('id', '=', $idLog)->first();

        $orders = Order::with(['dishes'])
        ->groupBy('id')
        ->orderBy('updated_at', 'desc')
        ->where('payment_state', '=', $idLog)
        ->get();
        
        return view('admin.orders.index', compact('orders', 'user'));
    }

    public function chart()
    {
        //Prendo l'id dell'utente loggato
        $idLog = Auth::id();

        // Recupero tutti i dati dell'utente loggato
        $user = DB::table('users')->where('id', '=', $idLog)->first();

        $quantity = DB::table('users')        
            ->join('dishes', 'users.id', '=', 'dishes.user_id')
            ->join('dish_order', 'dish_order.dish_id', '=', 'dishes.id')
            ->join('orders', 'dish_order.order_id', '=', 'orders.id')
            ->select(DB::raw('sum(dish_order.quantity) as qty , dishes.name'))
            ->groupBy('dishes.name')
            ->where('users.id', '=', $idLog)
            ->get();

        $price = DB::table('users')
            ->join('dishes', 'users.id', '=', 'dishes.user_id')
            ->join('dish_order', 'dish_order.dish_id', '=', 'dishes.id')
            ->join('orders', 'dish_order.order_id', '=', 'orders.id')
            ->select('orders.updated_at','orders.total_price')
            ->where('users.id', '=', $idLog)
            ->get();

        $dishName = $quantity->pluck('name');
        $totalQuantity = $quantity->pluck('qty');
        
        foreach($price as $item){
           $item->updated_at = date("d-m-Y", strtotime($item->updated_at));
        }
        
        $orderDate = $price->pluck('updated_at');
        $totalPrice = $price->pluck('total_price');

        return view('admin.chart.index', compact('totalQuantity','dishName','quantity' ,'user', 'price', 'orderDate' , 'totalPrice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
