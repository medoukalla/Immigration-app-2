<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HousingSpace extends Model
{
    use HasFactory;


    // get space items by id 
    public function items( $space_id ) {
        $ids = DB::table('housing_item_housing_space')->select('housing_item_id')->where('housing_space_id', $space_id)->get();

        $ids_array = [];
        if ( count( $ids ) > 0 ) {
            foreach ( $ids  as $id ) {
                array_push( $ids_array ,$id->housing_item_id);
            }
        }
        return HousingItem::whereIn('id', $ids_array)->get();
    }
    
}
