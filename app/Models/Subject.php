<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
     use HasFactory;
    public $timestamps=false;
    protected $fillable=["name"];
    public function students(){
    //    return $this->belongsToMany(Student::class,'student_subject','student_id','subject_id')->withPivot(['marks']);
    return $this->morphedByMany(Student::class,'courseable');
    }
    public function teachers(){
    //    return $this->belongsToMany(Student::class,'student_subject','student_id','subject_id')->withPivot(['marks']);
    return $this->morphedByMany(Teacher::class,'courseable');
    }
}
