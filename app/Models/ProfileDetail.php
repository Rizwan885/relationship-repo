<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileDetail extends Model
{
    use HasFactory;
     public $timestamps=false;
    protected $fillable=["state","city"];

    // Has One Through

    public function profile(){
        
        return $this->belongsTo(Profile::class);
    }
    // Has One Through
}
