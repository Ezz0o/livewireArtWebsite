<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{
    public $email, $password;
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit(Request $request)
    {

        $credentials = $this->validate();
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
        else
        {
            session()->flash('message', 'email or password is incorrect');
        }
        
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
