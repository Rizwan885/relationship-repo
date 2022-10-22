<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
     public $timestamps=false;
        protected $fillable=["comment"];
        public $table="comments";
        public function student(){
            return $this->belongsTo(Student::class);
        }
        public function likes(){
            return $this->hasMany(Like::class);
        }
}
