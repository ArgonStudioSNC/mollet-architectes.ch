@extends('app')

@section('page-title', __('main.competitions').' - '.__('main.office-full-name'))

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell">
                    <div class="object-content">
                        <h3>Principales réalisations et concours de 1982 à 1997</h3>
                        <h3 class="subheader"></h3>
                        <table class="competitions-table">
                            <thead>
                                <tr>
                                    <th>Concours gagnants</th>
                                    <th>Lieu</th>
                                    <th>Année</th>
                                    <th>Prix</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-href="{{ route('project', 'cpcjb-tavannes') }}">
                                    <td>Home de pédagogie curative</td>
                                    <td>Tavannes</td>
                                    <td>1982</td>
                                    <td>1<sup>er</sup></td>
                                    <td>12'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'ecole-d-agriculture') }}">
                                    <td>École cantonale d'agriculture</td>
                                    <td>Loveresse</td>
                                    <td>1983</td>
                                    <td>1<sup>er</sup></td>
                                    <td>30'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'home-d-orvin') }}">
                                    <td>Home personnes âgées</td>
                                    <td>Orvin</td>
                                    <td>1986</td>
                                    <td>1<sup>er</sup></td>
                                    <td>15'000 m<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td>Habitat (100 unités)</td>
                                    <td>Villeret</td>
                                    <td>1987</td>
                                    <td>1<sup>er</sup></td>
                                    <td>60'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'ried-de-madretsch') }}">
                                    <td>Habitat Ried de Madretsch</td>
                                    <td>Biel/Bienne</td>
                                    <td>1988</td>
                                    <td>1<sup>er</sup></td>
                                    <td>16'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'dufour') }}">
                                    <td>Habitat + bureaux Dufour</td>
                                    <td>Biel/Bienne</td>
                                    <td>1990</td>
                                    <td>1<sup>er</sup></td>
                                    <td>25'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'migros-marche-neuf') }}">
                                    <td>Migros Habitat-École</td>
                                    <td>Biel/Bienne</td>
                                    <td>1992</td>
                                    <td>1<sup>er</sup></td>
                                    <td>40'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'magasin-loeb') }}">
                                    <td>Magasins LOEB</td>
                                    <td>Biel/Bienne</td>
                                    <td>1996</td>
                                    <td>1<sup>er</sup></td>
                                    <td>40'000 m<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td>Pont sur la Suze<br>(avec Balzari & Schudel)</td>
                                    <td>Biel/Bienne</td>
                                    <td>1997</td>
                                    <td>1<sup>er</sup></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="competitions-table">
                            <thead>
                                <tr>
                                    <th>Projets primés</th>
                                    <th>Lieu</th>
                                    <th>Année</th>
                                    <th>Prix</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Imprimerie ABC</td>
                                    <td>Berne</td>
                                    <td>1989</td>
                                    <td>2<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Quartier Marché-Neuf 2000</td>
                                    <td>Biel/Bienne</td>
                                    <td>1990</td>
                                    <td>2<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Banque Cantonale</td>
                                    <td>Nidau</td>
                                    <td>1985</td>
                                    <td>2<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Home pour personnes âgées</td>
                                    <td>Brugg</td>
                                    <td>1984</td>
                                    <td>4<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Habitat rue de Lyon</td>
                                    <td>Genève</td>
                                    <td>1992</td>
                                    <td>4<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Home pour personnes âgées</td>
                                    <td>Évilard</td>
                                    <td>1985</td>
                                    <td>5<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Hôpital de Pourtalès</td>
                                    <td>Neuchâtel</td>
                                    <td>1989</td>
                                    <td>5<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Habitat Steinhof</td>
                                    <td>Burgdorf</td>
                                    <td>1988</td>
                                    <td>5<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Gare CFF - PTT - Quartier</td>
                                    <td>Lugano</td>
                                    <td>1988</td>
                                    <td>6<sup>ème</sup></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="competitions-table">
                            <thead>
                                <tr>
                                    <th>Autres réalisations - projets</th>
                                    <th>Lieu</th>
                                    <th>Année</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Transformation Maison du Peuple<br>(avec Andry et Habermann)</td>
                                    <td>Biel/Bienne</td>
                                    <td>1990</td>
                                    <td></td>
                                    <td>20'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'chemin-du-clos') }}">
                                    <td>Habitat Chemin du Clos</td>
                                    <td>Biel/Bienne</td>
                                    <td>1989</td>
                                    <td>Atuprix</td>
                                    <td></td>
                                </tr>
                                <tr data-href="{{ route('project', 'bourg-21-27-29') }}">
                                    <td>Administration communale et salle Conseil de Ville</td>
                                    <td>Biel/Bienne</td>
                                    <td>1985</td>
                                    <td></td>
                                    <td>40'000 m<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td>Aire usine à gaz (80'000 m<sup>2</sup>)<br>Procédure d'expertise et planification avec A. Tschumi et Urbaplan Lausanne</td>
                                    <td>Biel/Bienne</td>
                                    <td>1991</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Habitat Coopérative Berghaus</td>
                                    <td>Biel/Bienne</td>
                                    <td>1992</td>
                                    <td></td>
                                    <td>150'000 m<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td>Habitat pour Ciment Vigier</td>
                                    <td>Pery</td>
                                    <td>1992</td>
                                    <td></td>
                                    <td>20'000 m<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td>Habitat Hartmann Et Co.</td>
                                    <td>Biel/Bienne</td>
                                    <td>1992</td>
                                    <td></td>
                                    <td>20'000 m<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td>Rénovation Palais des Congrès</td>
                                    <td>Biel/Bienne</td>
                                    <td>1994</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr data-href="{{ route('project', 'casablanca') }}">
                                    <td>Villa Casablanca (agrandissement)</td>
                                    <td>Biel/Bienne</td>
                                    <td>1995</td>
                                    <td></td>
                                    <td>1'525 m<sup>3</sup></td>
                                </tr>
                                <tr>
                                    <td>Habitat Route de Mâche (Seniorenw.)</td>
                                    <td>Biel/Bienne</td>
                                    <td>1996</td>
                                    <td></td>
                                    <td>35'000 m<sup>3</sup></td>
                                </tr>
                                <tr data-href="{{ route('project', 'migros-marche-neuf') }}">
                                    <td>Migros Marché-Neuf</td>
                                    <td>Biel/Bienne</td>
                                    <td>1996</td>
                                    <td></td>
                                    <td>34'000 m<sup>3</sup></td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="competitions-table">
                            <thead>
                                <tr>
                                    <th>Distinctions</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Atuprix 1991 (Prix Culturel Bernois Architecture-Technique)</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Europaeischer Kalksandstein - Architekturpreis 1992</td>
                                    <td></td>
                                    <td></td>
                                    <td>Annerkennung</td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
