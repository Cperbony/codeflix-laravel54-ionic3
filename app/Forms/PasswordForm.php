<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class PasswordForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('password', 'password', [
                'label' => 'Senha',
                'rules' => 'required|min:6|confirmed'
            ])
            ->add('password_confirmation', 'password', [
                'label' => 'Confirmar a Senha',
                'rules' => 'required'
            ]);
    }
}
