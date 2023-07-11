<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'displayPicture',
        'password',
        'roleId',
        'genderId'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function userRole(){

        return $this->belongsTo(Role::class, 'roleId');
    }

    public function userGender(){
        return $this->belongsTo(Gender::class, 'genderId');
    }

    public function orders(){

        return $this->hasMany(Order::class);
    }
}
