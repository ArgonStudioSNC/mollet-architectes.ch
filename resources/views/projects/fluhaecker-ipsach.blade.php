@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Fluhhaecker, Ipsach",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "AUCUNE IMAGE",
                'src' => '',
                'media' => [
                    '1024' => '@2048.jpg',
                    '512' => '@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
