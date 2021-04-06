@extends('app')

@section('page-title', $project->title.' - '.__('main.office-full-name'))

@section('content')

    @include('templates.object-2-col', [
        'header' => "Centre de pédagogie curative du Jura bernois, Tavannes",
        'subheader' => "",
        'description' => [
        ],
        'files' => [
        ],
        'details' => [
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'cpcjb-tavannes_exterieur-1@512.jpg',
                'media' => [
                    '512' => 'cpcjb-tavannes_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'cpcjb-tavannes_exterieur-2@512.jpg',
                'media' => [
                    '512' => 'cpcjb-tavannes_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'cpcjb-tavannes_exterieur-3@512.jpg',
                'media' => [
                    '512' => 'cpcjb-tavannes_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'cpcjb-tavannes_exterieur-4@512.jpg',
                'media' => [
                    '512' => 'cpcjb-tavannes_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'cpcjb-tavannes_plan-1@512.jpg',
                'media' => [
                    '1024' => 'cpcjb-tavannes_plan-1@2048.jpg',
                    '512' => 'cpcjb-tavannes_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'cpcjb-tavannes_plan-2@512.jpg',
                'media' => [
                    '1024' => 'cpcjb-tavannes_plan-2@2048.jpg',
                    '512' => 'cpcjb-tavannes_plan-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
