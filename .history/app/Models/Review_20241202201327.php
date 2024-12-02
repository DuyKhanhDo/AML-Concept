<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'reviews';

    protected $fillable = ['user_id', 'media_id', 'rating', 'review', 'published_on'];
}
