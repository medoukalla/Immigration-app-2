<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',       // First and Last Name
        'email',      // Email Address
        'phone',      // Phone Number
        'message',    // Message Content
        'service'
    ];
}
