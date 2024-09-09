<?php

namespace App\Http\Livewire;

use Livewire\Component;
use TCG\Voyager\Models\Role;

class EditRules extends Component
{

    public $role_id = null;
    
    public function render()
    {

        $roles = Role::get();

        if ( is_null( $this->role_id ) ) {
            return view('livewire.edit-rules',[
                'roles' => $roles,
                'role' =>$roles->first()
            ]);
        }else {
            return view('livewire.edit-rules',[
                'roles' => $roles,
                'role' => $roles->where('id', $this->role_id)->first()
            ]);
        }

    }
}
