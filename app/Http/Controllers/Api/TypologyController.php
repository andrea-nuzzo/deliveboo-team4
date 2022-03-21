<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Typology;
use Illuminate\Support\Facades\DB;


class TypologyController extends Controller
{
    public function index() {
        $typologies = Typology::all();

        return response()->json($typologies);
    }

    public function show($id) {

        $myArray = explode(',', $id);   

        $foundRestaurant = DB::table('users')
            ->join('typology_user', 'typology_user.user_id', '=', 'users.id')
            ->join('typologies', 'typologies.id', '=', 'typology_user.typology_id')
            ->whereIn('typologies.id', $myArray)
            ->select('users.*')
            ->distinct()
            ->get();

        return json_decode($foundRestaurant);
    }
}
