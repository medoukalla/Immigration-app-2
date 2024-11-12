<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AssuranceRequest extends Model
{
    protected $fillable = [
        'name', 
        'date', 
        'sex', 
        'phone', 
        'email', 
        'assurance'
    ];
}
