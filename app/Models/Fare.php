<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
    use HasFactory;

    protected $primaryKey = 'fares_id';

    protected $fillable = [
        'fares_id',
        'typetransport_id',
        'typeticket_id',
        'price',
    ];

    public $timestamps = false;
}
