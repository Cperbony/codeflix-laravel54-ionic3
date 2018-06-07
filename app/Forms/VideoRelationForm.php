<?php

namespace CodeFlix\Forms;

use CodeFlix\Models\Category;
use CodeFlix\Models\Serie;
use Kris\LaravelFormBuilder\Form;

class VideoRelationForm extends Form
{
    public function buildForm()
    {
//        dd($this->model->categories);
        $this->add('categories', 'entity', [
            'label' => 'Categorias',
            'class' => Category::class,
            'property' => 'name',
            'selected' => $this->model ? $this->model->categories->pluck('id')->toArray() : null,
            'multiple' => true,
            'attr' =>
                [
                    'name' => 'categories[]'
                ],
            'rules' => 'required|exists:categories,id'
        ])
            ->add('serie_id', 'entity', [
                'label' => 'Séries',
                'class' => Serie::class,
                'property' => 'title',
                'empty_value' => 'Selecione a Série',
                'rules' => 'nullable|exists:series,id'

            ]);
    }
}
