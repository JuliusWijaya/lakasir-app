<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;
use Illuminate\Support\Facades\Auth;

class FormLogin extends Form
{
    //email
    #[Rule('required', message: 'Email tidak boleh kosong!')]
    public $email = '';

    #[Rule('required', message: 'Password tidak boleh kosong!')]
    public $password = '';

    public function loginAction()
    {
        $credentials = $this->validate();

        if (!Auth::attempt($credentials)) {
            return back()->with("login-failed", "Login Failed!");
        } else {
            request()->session()->regenerate();
            return redirect()->intended('dashboard');
        }
    }
}
