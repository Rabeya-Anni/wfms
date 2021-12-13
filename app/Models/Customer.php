<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable=[
        'username',
        'email',
        'password',
        'phone_number' , 
        'address',
    ];
    protected $hidden=[
        'password',    
    
    ];
}
