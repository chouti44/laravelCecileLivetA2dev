<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    const TITLE = 'title';
    const SLUG = 'slug';
    const CONTENT = 'content';

    protected $fillable = [
        'title', 'slug', 'content',
    ];
}
