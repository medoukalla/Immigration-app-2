<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu_item extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'menu_items';


    // get parents menu
    static function parents() {
        return Menu_item::where('parent_id', null)->orderBy('order', 'asc')->get();
    }

    // get parents childs 
    static function childs($parent_id) {
        return Menu_item::where('parent_id', $parent_id)->orderBy('order', 'asc')->get();
    }
    // get childs of childs 
    static function second_childs($child_id) {
        return Menu_item::where('parent_id', $child_id)->orderBy('order', 'asc')->get();
    }

    // check if menu has childs
    static function check_childs($menu_id) {
        if ( Menu_item::where('parent_id', $menu_id)->count() > 0 ) {
            return true;
        }return false;
    }

    static function get_menu() {
        $parents = Menu_item::parents();


        $childs  = array();

        foreach ($parents as $parent) {
            if ( Menu_item::check_childs($parent->id) === true ) {
                array_push($childs, Menu_item::childs($parent->id));
            }else {
                continue;
            }
        }
        /*$sec_childs = array();
        foreach ($childs as $child) {
            array_push($sec_childs, Menu_item::second_childs($child->id));
        }*/

        $menu = array(
            'parents'    => $parents, 
            'childs'     => $childs,
            //'sec_childs' => $sec_childs,
        );

        return $menu;
    }

}
