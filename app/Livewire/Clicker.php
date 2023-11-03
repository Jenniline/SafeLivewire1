<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{

    public $username = "testuser";
    
    public function createNewUser()
    {
       User::create([
        'first_name' => 'test User',
        'last_name' => 'test User',
        'password' => 'testUser',
        'phonenumber' => 'test User',
        'email' => "test@test.com"
       ]);
    }


    public function handleClick()
    {
      dump("clicked");
    }


    public function render()
    {
        $title = "Test";
        $users = User::all();

        return view('livewire.clicker', [
            'title' => $title,
            'users' => $users
        ]);
    }
}
