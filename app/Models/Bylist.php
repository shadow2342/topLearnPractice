<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bylist extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'price',
      'teacher',
      'time',
      'content',
        'created_at',
        'updated_at'
    ];
}
