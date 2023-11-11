<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Card;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginform(){
        return view('login.index');
    }

    public function store(Request $request){
        $phone = $request->input('phone');
        $card = $request->input('card-number');
        
        $user = User::where('phone_number', $phone)->first();
        // dd($user, $card);
        if (!$user) {
            return redirect()->route('login')->with('error', 'Користувача не знайдено.');
        } 
        $card = Card::where('card_number', $request['card-number'])
                    ->where('owner_id', $user->user_id)
                    ->first();

        if (!$card) {
            return redirect()->route('login')->with('error', 'Номер картки не знайдено.');
        } else{
            return redirect()->route('user',['user' => $user->user_id]);
        }
        
    
    }    
}
