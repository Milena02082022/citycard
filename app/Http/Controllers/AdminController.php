<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function store(Request $request){
        $data = $request->all();
        // dd($data);
        return redirect()->route('adminpanel');
    }
    public function index(){
        $cities = DB::table('city')->get();
        return view('admin.adminpanel', compact('cities'));
    }
}
