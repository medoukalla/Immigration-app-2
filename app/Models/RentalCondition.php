<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class RentalCondition extends Model
{
    protected $table = 'RentalCondition';


    /**
     * Get the item associated with the HousingRule
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function item()
    {
        return $this->hasOne(HousingItem::class, 'id', 'icon');
    }
}
