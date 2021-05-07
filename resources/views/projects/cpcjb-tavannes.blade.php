@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))

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
                'alt' => "Image extérieure 6",
                'src' => 'cpcjb-tavannes_exterieur-6@512.jpg',
                'media' => [
                    '2048' => 'cpcjb-tavannes_exterieur-6.jpg',
                    '1024' => 'cpcjb-tavannes_exterieur-6@2048.jpg',
                    '512' => 'cpcjb-tavannes_exterieur-6@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'cpcjb-tavannes_exterieur-2@512.jpg',
                'media' => [
                    '1024' => 'cpcjb-tavannes_exterieur-2.jpg',
                    '512' => 'cpcjb-tavannes_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'cpcjb-tavannes_exterieur-5@512.jpg',
                'media' => [
                    '2048' => 'cpcjb-tavannes_exterieur-5.jpg',
                    '1024' => 'cpcjb-tavannes_exterieur-5@2048.jpg',
                    '512' => 'cpcjb-tavannes_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'cpcjb-tavannes_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'cpcjb-tavannes_exterieur-4.jpg',
                    '512' => 'cpcjb-tavannes_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 1",
                'src' => 'cpcjb-tavannes_plan-1@512.jpg',
                'media' => [
                    '2048' => 'cpcjb-tavannes_plan-1.jpg',
                    '1024' => 'cpcjb-tavannes_plan-1@2048.jpg',
                    '512' => 'cpcjb-tavannes_plan-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Plan 2",
                'src' => 'cpcjb-tavannes_plan-2@512.jpg',
                'media' => [
                    '2048' => 'cpcjb-tavannes_plan-2.jpg',
                    '1024' => 'cpcjb-tavannes_plan-2@2048.jpg',
                    '512' => 'cpcjb-tavannes_plan-2@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
