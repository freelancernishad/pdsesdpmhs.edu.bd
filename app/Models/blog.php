<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    use HasFactory,SoftDeletes;


    protected $fillable = [
        'school_id',
        'post_id',
        'title',
        'slug',
        'description',
        'Images',
        'Tags',
        'Category',
        'status',
    ];

}