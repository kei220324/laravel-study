<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cat extends Model
{
    use HasFactory;

    public function blogs(){
      return  $this->belongsToMany(related:Blog::class);
    }
}
