<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'itemId',
    ];

    public function userCart(){

        return $this->belongsTo(User::class, 'accountId');
    }

    public function cartItem(){

        return $this->belongsTo(Item::class, 'itemId');
    }
}
