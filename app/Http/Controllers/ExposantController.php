<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExposantController extends Controller
{
    public function index(){
        return view('exposants.index');
    }
}
