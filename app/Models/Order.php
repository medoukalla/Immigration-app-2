<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // get appartement by id 
    public function appartement( int $id) {
        return Housing::where('id', $id)->first();
    }


    /**
     * Get the house that owns the Order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function house()
    {
        return $this->belongsTo(Housing::class, 'house_id');
    }

}
