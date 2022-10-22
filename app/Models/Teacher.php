<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=["firstname","lastname"];
   public function profile(){
        // return $this->hasOne(Profile::class);
    return $this->morphOne(ProfileOneThrough::class,'profileable');
    }

    public function subjects(){
            return $this->morphToMany(Subject::class,'courseable');

    }
}
