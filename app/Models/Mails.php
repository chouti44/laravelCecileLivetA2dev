<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Mails extends Model
{
    use Notifiable;

    const EMAIL = 'email';
    const SUBJECT = 'subject';
    const CONTENT = 'content';

    protected $fillable = [
        'email', 'subject', 'content',
    ];
}
