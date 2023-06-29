<?php

namespace App\Http\Livewire\Authentication;

use Hash;
use Auth;
use Request;
use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $name, $email, $password, $password_confirmation;

    public function mount(){
        if(Auth::user()){
            return redirect('/home');
        }
    }

    public function saveUser(){
        $this->validate([
            'name' => 'required', 
            'email' => 'required|email|unique:users', 
            'password' => 'required|confirmed'    
        ]);

        $usr = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        return redirect('/home');
    }

    public function render()
    {
        return view('livewire.authentication.register')->extends('layouts.app');
    }
}
