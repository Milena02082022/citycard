<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Card;
use App\Models\Trip;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(User $user){
        return view('user.index', compact('user'));
    }
    
    public function profile(User $user) {
        return view('user.profile', compact('user'));
    }

    public function cards(User $user) {
        $cards = Card::where('owner_id', $user->user_id)->get();
        return view('user.cards', compact('user', 'cards'));
    }

    public function showAddCardForm(User $user)
    {
        return view('user.add-card', compact('user'));
    }

    public function addCard(Request $request, User $user)
    {
        return 'Запит на додавання картки';
    }

    public function transactions(User $user) {
        return view('user.transactions', compact('user'));
    }

    public function history(User $user) {
        return view('user.history', compact('user'));
    }
   
}
