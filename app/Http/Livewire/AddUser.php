<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use TCG\Voyager\Models\Role;

class AddUser extends Component
{

    // users list 

    //  user info 
    public $user_name;
    public $user_email;
    public $user_phone;
    public $user_store;
    public $user_country;
    public $user_role_id;
    public $user_plan;
    public $password;


    public $role_filter;
    public $plan_filter;
    public $status_filter;


    public $status = null;
    public $status_message = null;

    public function render()
    {
        return view('livewire.add-user',[
            'users' => User::orderBy('id', 'desc')->get(),
            'roles' => Role::get(),
        ]);
    }


    public function create_user() {

        if ( !is_null( $this->status ) ) {
            $this->status = $this->status_message = null;
        }

        $validated = $this->validate([ 
            'user_name' => 'required|min:3',
            'user_email' => 'required|email|min:10',
            'user_phone' => 'required',
            'user_store' => 'required|unique:users,username',
            'password' => 'required|min:8'
        ]);


        // create user 
        $user = new User();
        $user->role_id = $this->user_role_id;
        $user->name = $this->user_name;
        $user->email = $this->user_email;
        $user->password = Hash::make($this->password);
        $user->username = $this->user_store;
        $user->phone = $this->user_phone;

        if ( $user->save() ) {
            $this->user_name = $this->user_email = $this->user_phone = $this->user_store = $this->password = null;
            $this->status = 'success';
            $this->status_message = "New user created successfully";
        }

    }
}
