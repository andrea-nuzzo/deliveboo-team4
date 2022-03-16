<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();

        return response()->json($users);
    }

    public function show($slug) {
        $users = User::where("slug", $slug)->with("dishes")->with('typologies')->first();

        return response()->json($users);
    }
}
