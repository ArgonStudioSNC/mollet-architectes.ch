@extends('app')

@section('content')
    <div class="site-content">
        <div class="project-gallery grid-container">
            <div class="grid-x grid-margin-x">
                @foreach ($projects as $project)
                <a class="cell small-6 medium-4 large-3 xxlarge-2" href={{ route('project', ['slug' => $project->slug]) }}>
                    <img src="{{ asset('storage/projects/'.$project->slug.'/'.$project->slug.'@timg.jpg') }}" />
                    <div class="project-title">
                        @if (isset($hideTitle))
                            &nbsp;
                        @else
                            {{ $project->title }}
                        @endif
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
