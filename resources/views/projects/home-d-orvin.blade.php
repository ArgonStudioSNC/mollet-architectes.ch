@extends('app')

@section('content')

    @include('templates.object-2-col', [
        'header' => "Home pour personnes âgées \"Les Roches\", Orvin",
        'subheader' => "",
        'description' => [
            "Le projet de ce home pour personnes âgées exploite au maximum les avantages d'une position dominante sur un léger contrefort du Jura en site dégagé hors du village. Les oriels des façades latérales captent obliquement la vue, tandis que frontale· ment, les espaces d'accueil formés par le bel enchaînement spatial de la plate·forme d'accès, de la réception, de la cafétéria et de la salle à manger, s'ouvrent au paysage sous la forme d'une vaste véranda logée dans le soubassement du corps central.",
            "Die prominente Lage an einem flach geneigten Hang der Jura· landschaft ausserhalb des Dorfes mit entsprechender Aussicht wurde bei diesem Altersheim zum entwurfsbestimmenden Thema. Dies zeigt sich in den schräg ausgestellen, die Aussicht ein· holenden Erkern an den Seitenfassaden, vor allem aber im schönräumlichen zusammenhängenden Gemeinschaftsbereich von seitlicher Zugangsplattform, Reception, Cafeteria und Speisesaal, der wie eine verglaste Terrasse die Basis des talseitigen Querflügels bildet.",
        ],
        'files' => [
            'consulter la brochure originale' => asset('storage/projects/brochure.pdf#'.$project->slug),
        ],
        'details' => [
            "Lieu" => "Les Oeuches 26, 2534 Orvin",
            "Maître de l'ouvrage" => $project->client,
            "Architectes" => "Henri Mollet architectes ass. SA",
            "Ingénieur civil" => "Zimmermann + Tellenbach SA, Bern",
            "" => "&nbsp;",
            "Concours" => "1989",
            "Début des travaux" => "1989",
            "Fin des travaux" => "1991",
        ],
        'figures' => [
            [
                'alt' => "Image",
                'src' => '',
                'media' => [
                    '1024' => '@2048.jpg',
                    '512' => '@1024.jpg',
                ],
            ],
        ],
    ])

@endsection
