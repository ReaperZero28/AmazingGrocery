<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'itemName',
        'itemDesc',
        'price',
        'image'
    ];

    public function itemCart(){

        return $this->hasMany(Cart::class);
    }
}
