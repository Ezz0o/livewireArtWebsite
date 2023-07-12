<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterForm extends Component
{

    public $name, $email, $password, $password_confirmation, $gender, $birth_date, $bio;
    protected $rules = [

        'name' => 'required|min:6',
        'email' => 'required|email|unique:users,email',
        'password' => 'required',
        'password_confirmation' => 'required',
        'gender' => 'required',
        'birth_date' => 'required',
        'bio' => ''
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);

    }

    public function submit(Request $request)
    {

        $credentials = $this->validate();

       // Execution doesn't reach here if validation fails.

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
            'gender' => $this->gender,
            'birth_date' => $this->birth_date,
            'bio' => $this->bio ?? '...',
        ]);

        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/');
        }
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
