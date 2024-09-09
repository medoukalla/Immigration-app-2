<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ContractDetail extends Model
{
    
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
