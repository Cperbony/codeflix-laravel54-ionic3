<?php

$tabs = [
    [
        'title' => 'Informações',
        'link' => !isset($video)?route('admin.videos.create'):route('admin.videos.edit', ['video' =>$video->id])
    ],
    [
        'title' => 'Séries e Categorias',
        'link' => !isset($video)? '#' : route('admin.videos.relations.create', ['video' => $video->id]),
        'disable' => !isset($video)?true : false,
    ],
    [
        'title' => 'Vídeo e Thumbnail',
        'link' => ''
    ],
];
?>
<h3>Gerenciar Vídeos</h3>
<div class="text-right">
    {!! Button::link('Listar Vídeos')->asLinkTo(route('admin.videos.index')) !!}
</div>
{!! Navigation::tabs($tabs) !!}
<div>
    {!! $slot !!}
</div>
