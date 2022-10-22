<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
      public $timestamps=false;
        protected $fillable=["name"];
        public function comment(){
            return $this->belongsTo(Comment::class);
        }
}
