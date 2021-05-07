@extends('app')

@section('page-title', $project->name.' - '.__('main.office-full-name'))
@section('page-description', "Le projet de ce home pour personnes âgées exploite au maximum les avantages d’une position dominante sur un léger contrefort du Jura en site dégagé hors du village. Les oriels des façades latérales captent obliquement la vue, tandis que frontalement, les espaces d’accueil formés par le bel enchaînement spatial de la plateforme d’accès, de la réception, de la cafétéria et de la salle à manger, s’ouvrent au paysage sous la forme d’une vaste véranda logée dans le soubassement du corps central.")

@section('content')

    @include('templates.object-3-col', [
        'header' => "Home pour personnes âgées \"Les Roches\", Orvin",
        'subheader' => "",
        'description' => [
            "Le projet de ce home pour personnes âgées exploite au maximum les avantages d’une position dominante sur un léger contrefort du Jura en site dégagé hors du village. Les oriels des façades latérales captent obliquement la vue, tandis que frontalement, les espaces d’accueil formés par le bel enchaînement spatial de la plateforme d’accès, de la réception, de la cafétéria et de la salle à manger, s’ouvrent au paysage sous la forme d’une vaste véranda logée dans le soubassement du corps central.",
            "Die prominente Lage an einem flach geneigten Hang der Juralandschaft ausserhalb des Dorfes mit entsprechender Aussicht wurde bei diesem Altersheim zum entwurfsbestimmenden Thema. Dies zeigt sich in den schräg ausgestellen, die Aussicht einholenden Erkern an den Seitenfassaden, vor allem aber im schönräumlichen zusammenhängenden Gemeinschaftsbereich von seitlicher Zugangsplattform, Reception, Cafeteria und Speisesaal, der wie eine verglaste Terrasse die Basis des talseitigen Querflügels bildet.",
        ],
        'files' => [
            __('projects.read-the-brochure') => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            __('projects.location') => $project->location,
            __('projects.client') => $project->client,
            __('projects.architects') => "Henri Mollet architectes ass. SA",
            __('projects.engineer') => "Zimmermann + Tellenbach SA, Bern",
            "" => "&nbsp;",
            __('projects.competition') => "1989",
            __('projects.construction-start') => "1989",
            __('projects.construction-end') => "1991",
        ],
        'figures' => [
            [
                'alt' => "Image extérieure 1",
                'src' => 'home-d-orvin_exterieur-1@512.jpg',
                'media' => [
                    '1024' => 'home-d-orvin_exterieur-1.jpg',
                    '512' => 'home-d-orvin_exterieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 2",
                'src' => 'home-d-orvin_exterieur-2@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_exterieur-2.jpg',
                    '1024' => 'home-d-orvin_exterieur-2@2048.jpg',
                    '512' => 'home-d-orvin_exterieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 3",
                'src' => 'home-d-orvin_exterieur-3@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_exterieur-3.jpg',
                    '1024' => 'home-d-orvin_exterieur-3@2048.jpg',
                    '512' => 'home-d-orvin_exterieur-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 4",
                'src' => 'home-d-orvin_exterieur-4@512.jpg',
                'media' => [
                    '1024' => 'home-d-orvin_exterieur-4.jpg',
                    '512' => 'home-d-orvin_exterieur-4@1024.jpg',
                ],
            ],
            [
                'alt' => "Image extérieure 5",
                'src' => 'home-d-orvin_exterieur-5@512.jpg',
                'media' => [
                    '1024' => 'home-d-orvin_exterieur-5.jpg',
                    '512' => 'home-d-orvin_exterieur-5@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieur 1",
                'src' => 'home-d-orvin_interieur-1@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_interieur-1.jpg',
                    '1024' => 'home-d-orvin_interieur-1@2048.jpg',
                    '512' => 'home-d-orvin_interieur-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Image intérieur 2",
                'src' => 'home-d-orvin_interieur-2@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_interieur-2.jpg',
                    '1024' => 'home-d-orvin_interieur-2@2048.jpg',
                    '512' => 'home-d-orvin_interieur-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Coupes et façades",
                'src' => 'home-d-orvin_coupes-et-facades-1@512.jpg',
                'media' => [
                    '1024' => 'home-d-orvin_coupes-et-facades-1.jpg',
                    '512' => 'home-d-orvin_coupes-et-facades-1@1024.jpg',
                ],
            ],
            [
                'alt' => "Coupes et façades",
                'src' => 'home-d-orvin_coupes-et-facades-2@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_coupes-et-facades-2.jpg',
                    '1024' => 'home-d-orvin_coupes-et-facades-2@2048.jpg',
                    '512' => 'home-d-orvin_coupes-et-facades-2@1024.jpg',
                ],
            ],
            [
                'alt' => "Coupes et façades",
                'src' => 'home-d-orvin_coupes-et-facades-3@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_coupes-et-facades-3.jpg',
                    '1024' => 'home-d-orvin_coupes-et-facades-3@2048.jpg',
                    '512' => 'home-d-orvin_coupes-et-facades-3@1024.jpg',
                ],
            ],
            [
                'alt' => "Premier étage",
                'src' => 'home-d-orvin_premier-etage@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_premier-etage.jpg',
                    '1024' => 'home-d-orvin_premier-etage@2048.jpg',
                    '512' => 'home-d-orvin_premier-etage@1024.jpg',
                ],
            ],
            [
                'alt' => "Rez-de-chausée",
                'src' => 'home-d-orvin_rez-de-chaussee@512.jpg',
                'media' => [
                    '2048' => 'home-d-orvin_rez-de-chaussee.jpg',
                    '1024' => 'home-d-orvin_rez-de-chaussee@2048.jpg',
                    '512' => 'home-d-orvin_rez-de-chaussee@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
