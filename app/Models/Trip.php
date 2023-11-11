<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips';

    protected $primaryKey = 'trip_id';

    protected $fillable = [
        'trip_id',
        'card_id',
        'citytrip_id',
        'timetrip',
        'price',
    ];

    public $timestamps = false;
}
