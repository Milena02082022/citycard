<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index() {
        return view('registration.index');
    }

    public function store(StoreRegisterRequest $request){
        $validated = $request->validated();

        $lastUserId = User::max('user_id');

        $user = new User;
        $user->user_id = $lastUserId + 1;
        $user->user_surname = $validated['surname'];
        $user->user_name = $validated['name'];
        $user->phone_number =$validated['phone'];
        $user->email =$validated['email'];
        $user->password = $validated['password'];

        $user->save();

        session(['alert'=>  'Користувач зареєстрований!']);
        
        return redirect()->route('user');


    }
}
