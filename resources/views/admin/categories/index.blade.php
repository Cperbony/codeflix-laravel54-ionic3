@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Categoria</h3>
            {!! Button::primary('Nova Categoria')->asLinkTo(route('admin.categories.create')) !!}
        </div>
        <div class="row">
            {!!
            Table::withContents($categories->items())
                ->striped()
                ->callback(
                    'Editar', function ($field, $category) {
                     $linkEdit = route('admin.categories.edit', ['category' => $category-> id]);
                     return Button::link(Icon::create('pencil'))->asLinkTo($linkEdit);
                })->callback(
                    'Remover', function ($field, $category) {
                     $linkShow = route('admin.categories.show', ['category' => $category]);
                            return Button::link(Icon::create('remove'))->asLinkTo($linkShow);
                            })
             !!}
        </div>
        {!! $categories->links() !!}
    </div>
@endsection
