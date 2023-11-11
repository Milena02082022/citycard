<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $primaryKey = 'card_id';
    
    public $timestamps = false;

    protected $fillable = [
        'card_id',
        'card_number',
        'owner_id',
        'typecard_id',
        'card_number',
        'expiration_date',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

}
