@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Vídeos</h3>
            {!! Button::primary('Novo Vídeo')->asLinkTo(route('admin.videos.create')) !!}
        </div>
        <div class="row">
            {!!
            Table::withContents($videos->items())
                ->striped()
                ->callback('Descrição', function ($field, $video) {
                        return MediaObject::withContents(
                            [
                            'image' => '//placehold.it/64x64',
                            'link' => '#',
                            'heading' => $video->title,
                            'body' => $video->description
                            ]
                        );
                    })
                    ->callback('Ações', function ($field, $video) {
                    $linkEdit = route('admin.videos.edit', ['video' => $video->id]);
                    $linkShow = route('admin.videos.show', ['video' => $video->id]);
                     return Button::link(Icon::create('pencil'))->asLinkTo($linkEdit).'|'.
                     Button::link(Icon::create('remove'))->asLinkTo($linkShow);
                })
             !!}
        </div>
        {!! $videos->links() !!}
    </div>
@endsection

@push('styles')
    <style type="text/css">
        .media-body {
            width: auto;
        }
    </style>
@endpush