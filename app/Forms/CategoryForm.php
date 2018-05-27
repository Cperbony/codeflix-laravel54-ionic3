<?php

namespace CodeFlix\Forms;

use Kris\LaravelFormBuilder\Form;

class CategoryForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'label' => 'Nome Categoria',
                'rules' => 'required|max:100'
            ]);
    }
}
