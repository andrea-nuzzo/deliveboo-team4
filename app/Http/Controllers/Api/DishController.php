<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dish;

class DishController extends Controller
{
    public function index() {
        $dishes = Dish::all();

        return response()->json($dishes);
    }

    public function show($id) {
        $dishes = Dish::where("user_id", $id)->get();

        return response()->json($dishes);
    }
    
}
