<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recette;

class Homecotroller extends Controller
{
    public function index(){
        $reccettes = recette::all();

        return view('welcome',compact('recettes'));
    }
}
