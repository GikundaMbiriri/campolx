<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name1;
    public $email1;
    public $phone1;
    public $password1;
    protected $rules = [
        'name1' => 'required',
        'email1' => 'required',
        'phone1' => 'required',
        'password1' => 'required',

    ];
    //runs on clicking submit
    public function reg()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->name1;

        $user->email = $this->email1;
        $user->tel = $this->phone1;
        $user->password = Hash::make($this->password1);

        $user->save();
        session()->flash('message', 'user created successfully');
        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.register')->layout('layouts.base');
    }
}
