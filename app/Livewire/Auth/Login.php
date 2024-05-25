<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use App\Livewire\Forms\FormLogin;

class Login extends Component
{
    public FormLogin $form;

    public function login()
    {
        $this->form->loginAction();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
