<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
   protected $primaryKey ="post_id";
    public function category(){
        return $this->belongsTo("App\Category");

    } 
    public function user(){
        return $this->belongsTo("App\User");

    } 
}
