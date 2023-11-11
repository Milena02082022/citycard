<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $table = 'costs';
    
    protected $primaryKey = 'cost_id';

    protected $fillable = [
        'cost_id',
        'card_id',
        'timecost',
        'amount',
    ];

    public $timestamps = false;
}
