<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $table = 'transport';

    protected $primaryKey = 'transport_id';

    protected $fillable = [
        'transport_id',
        'transport_name',
    ];

    public $timestamps = false;
    
}
