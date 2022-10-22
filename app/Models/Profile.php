<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
        public $timestamps=false;
        protected $fillable=["email","phone"];

        public function student(){
            return $this->belongsTo(Student::class);
        }
        
        // Has One Through

    public function profiledetail(){
        
        return $this->hasOne(ProfileDetail::class);
    }
    // Has One Through

    public function profileable(){
        return $this->morphTo();
    }

}
