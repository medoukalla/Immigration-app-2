<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Housing extends Model
{

    protected $table = "housing";
    

    // get house spaces 
    /**
     * Get all of the spaces for the Housing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function spaces()
    {
        return $this->hasMany(HousingSpace::class, 'housing_id');
    }


    /**
     * Get all of the rules for the Housing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rules()
    {
        return $this->hasMany(HousingRule::class, 'housing_id');
    }


    /**
     * Get all of the conditions for the Housing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function conditions()
    {
        return $this->hasMany(RentalCondition::class, 'housing_id');
    }


    /**
     * Get all of the contracts for the Housing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contracts()
    {
        return $this->hasMany(ContractDetail::class, 'housing_id');
    }


    // check if animals status 
    public function check_animals( $id ) {
        $status =  HousingRule::select('status')->where('housing_id', $id)->where('id', 1);
        if ( $status->exists() ) {
            return $status->first()->status;
        }
        return false;
    }

    // check if animals status 
    public function check_smoking( $id ) {
        $status =  HousingRule::select('status')->where('housing_id', $id)->where('id', 2);
        if ( $status->exists() ) {
        return $status->first()->status;
        }
        return false;
    }

    // check if animals status 
    public function check_guest( $id ) {
        $status =  HousingRule::select('status')->where('housing_id', $id)->where('id', 3);
        if ( $status->exists() ) {
        return $status->first()->status;
        }
        return false;
    }

    // get translate version 
    /**
     * Get the translate associated with the Housing
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function translate()
    {
        return Housing::where('id', $this->translate)->first();
    }

}
