<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'post_author',
        'content',
        'title',
        'status',
        'post_name',
        'img_url',
        'img_id',
    ];

}
