@php

use App\Models\Competition;

@endphp

@extends('app')

@section('page-title', __('main.competitions').' - '.__('main.office-full-name'))
@section('page-description', __('main.description-competitions'))

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                <div class="cell">
                    <div class="object-content">
                        <h3>Principales réalisations et concours de 1982 à 1997</h3>
                        <h3 class="subheader"></h3>
                        <div class="object-brochure">
                            <div>
                                <a href="{{ asset('storage/projects/brochure.pdf#concours') }}" target="_blank"><i class="fas fa-file-pdf"></i>&nbsp;<span class="underline">{{ __('projects.read-the-brochure') }}</span></a>
                            </div>
                        </div>

                        @foreach (Competition::select('category')->distinct('category')->get() as $val)
                        <div class="competitions-table grid-y">
                            <div class="cell">
                                <div class="competitions-table-head grid-x">
                                    <div class="cell large-5">{{ __('projects.'.$val->category) }}</div>
                                    <div class="cell large-4 show-for-large">{{ __('projects.location') }}</div>
                                    <div class="cell large-1 show-for-large">{{ __('projects.year') }}</div>
                                    <div class="cell large-1 show-for-large">{{ __('projects.prize') }}</div>
                                    <div class="cell large-1 show-for-large"></div>
                                </div>
                            </div>
                            @foreach (Competition::where('category', $val->category)->get() as $elem)
                            <div class="cell">
                                <div class="competitions-table-row grid-x align-bottom"
                                    @isset($elem->project) onclick="window.location.href='{{ route('project', $elem->project->slug) }}'" style="cursor: pointer;" @endisset>
                                    <div class="cell large-5">{!! $elem->name !!}</div>
                                    <div class="cell large-4">{!! $elem->location !!}</div>
                                    <div class="cell large-1">{!! $elem->year !!}</div>
                                    <div class="cell large-1">{!! $elem->award !!}</div>
                                    <div class="cell large-1 large-text-right">
                                        @isset($elem->volume)
                                            {!! number_format($elem->volume, 0, '.', '\'') !!} m<sup>3</sup>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        @endforeach

                        <div class="competitions-table grid-y">
                            <div class="cell">
                                <div class="competitions-table-head grid-x">
                                    <div class="cell">{{ __('projects.awards') }}</div>
                                </div>
                            </div>
                            <div class="cell">
                                <div class="competitions-table-row grid-x">
                                    <div class="cell">Atuprix 1991 (Prix Culturel Bernois Architecture-Technique)</div>
                                </div>
                            </div>
                            <div class="cell">
                                <div class="competitions-table-row grid-x">
                                    <div class="cell large-10">Europaeischer Kalksandstein - Architekturpreis 1992</div>
                                    <div class="cell large-2">Annerkennung</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
