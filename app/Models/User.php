<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;


class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_surname',
        'user_name',
        'phone_number',
        'email',
        'role',
    ];

    protected $hidden = [
        'password','remember_token',
    ];

    public $timestamps = false;

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isUser()
    {
        return $this->role === 'user';
    }

    public function cards(){
        return $this->hasMany(Card::class);
    }
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    public function trip(){
        return $this->hasMany(Trip::class);
    }
}

