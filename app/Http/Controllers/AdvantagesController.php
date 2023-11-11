<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvantagesController extends Controller
{
    public function index(){
        return view('advantages.index');
    }
}
