<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodrequest extends Model
{
    use HasFactory;
    protected $guarded=[];


    public function requestRelation(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}

