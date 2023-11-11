<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $table = 'transactions';
    
    protected $primaryKey = 'transaction_id';

    protected $fillable = [
        'transaction_id',
        'card_id',
        'timetrans',
        'amount',
    ];

    public $timestamps = false;
}
