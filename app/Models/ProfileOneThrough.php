<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileOneThrough extends Model
{
    use HasFactory;
     public $timestamps=false;
     protected $fillable=['email','phone'];
     public function profileable(){
        return $this->morphTo();
     }
}
