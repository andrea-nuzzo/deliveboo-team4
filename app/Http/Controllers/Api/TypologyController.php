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
        // $typology = Typology::where("id", $id)->with("users")->get();

        // return response()->json($typology['users']);

        $myArray = explode(',', $id);   

        $foundRestaurant = DB::table('users')
            ->join('typology_user', 'typology_user.user_id', '=', 'users.id')
            ->join('typolgies', 'typolgies.id', '=', 'typology_user.typology_id')
            ->whereIn('typologies.id', $myArray)
            ->select('users.*')
            ->distinct()
            ->get();

        return json_decode($foundRestaurant);
    }
}
