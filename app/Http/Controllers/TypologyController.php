<?php

namespace App\Http\Controllers;

use App\Typology;
use Illuminate\Http\Request;

class TypologyController extends Controller
{
    public function index() {
        $typologies = Typology::all();
        return view('welcome', compact('typologies'));
    }
}
