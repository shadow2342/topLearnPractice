<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable=[
      'item_name',
      'item_content',
      'item_description',
      'item_teacher',
      'item_time',
      'item_price',
        'item_category',
      'item_img_src' ,
        'created_at',
        'updated_at'
    ];
}
