<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable=["firstname","lastname"];
    public function profile(){
        // return $this->hasOne(Profile::class);
    return $this->morphOne(ProfileOneThrough::class,'profileable');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function subjects(){
    //    return $this->belongsToMany(Subject::class,'student_subject','student_id','subject_id')->withPivot(['marks']);

    return $this->morphToMany(Subject::class,'courseable');
    }
    public function detailsofprofile(){
        return $this->hasOneThrough(ProfileDetail::class,Profile::class,'student_id','profile_id');
    }
    public function detailoflikes(){
        return $this->hasManyThrough(
            Like::class,
            Comment::class,
            'student_id',
            'comment_id',
            'id',
            'id'
        
        );
    }

}
