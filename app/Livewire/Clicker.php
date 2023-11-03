<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{

public $first_name;
public $last_name;
public $phonenumber;
public $email;
public $password;

    public function createNewUser()
    {
       User::create([
        'first_name' => $this->first_name,
        'last_name' => $this->last_name,
        'password' => $this->password,
        'phonenumber' => $this->phonenumber,
        'email' => $this->email
       ]);
    }


    public function handleClick()
    {
      dump("clicked");
    }


    public function render()
    {
        $users = User::all();

        return view('livewire.clicker', [
            'users' => $users
        ]);
    }
}
