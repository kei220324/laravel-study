<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    // マスアサインを許可するカラムを指定
    protected $fillable = ['title', 'body', 'image'];
}
