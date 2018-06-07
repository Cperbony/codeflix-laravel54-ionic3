@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo Vídeo</h3>
            <?php $icon = Icon::create('floppy-disk'); ?>
            {!!
            form($form->add('salve', 'submit', [
            'attr' => ['class' => 'btn btn-primary btn-block'],
            'label' => $icon
            ]))
            !!}
        </div>
    </div>
@endsection
