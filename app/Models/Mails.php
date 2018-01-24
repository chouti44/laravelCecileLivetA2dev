<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mails extends Model
{
    const EMAIL = 'email';
    const SUBJECT = 'subject';
    const CONTENT = 'content';

    protected $fillable = [
        'email', 'subject', 'content',
    ];
}
