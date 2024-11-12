<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    use HasFactory;

    // Specify the table name if not following Laravel's naming convention
    protected $table = 'contact_forms';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'service_interest',
        'nationality',
        'residence',
        'situation_description',
    ];
}
