<?php

namespace App\Http\Livewire\Authentication;

use Auth;
use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    public $email, $password;

    public function mount(){
        if(Auth::user()){
            return redirect('/home');
        }
    }

    public function authUser(){
        $this->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];
        if(Auth::attempt($credentials)){
            return redirect()->intended('/home');
        }
        $this->addError('user', 'Invalid email or password.');
    }
        
    public function render()
    {
        return view('livewire.authentication.login')->extends('layouts.app');
    }
}
