@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            @component('admin.videos.tabs-component', ['video' => $form->getModel()])
                <div class="col-md-12">
                    <h4>Série e Categorias</h4>
                </div>
                <?php $icon = Icon::create('pencil'); ?>
                {!!
                    form($form->add('salve', 'submit', [
                    'attr' => ['class' => 'btn btn-primary btn-block'],
                    'label' => $icon
                    ]))
                !!}
            @endcomponent
        </div>
    </div>
@endsection
