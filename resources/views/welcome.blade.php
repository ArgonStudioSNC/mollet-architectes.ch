@extends('app')

@section('content')
    <div class="site-content">
        <div class="grid-container">
            <div class="grid-x grid-margin-x grid-margin-y">
                @foreach ($projects as $project)
                <a class="cell medium-2" href={{ route('project', ['slug' => $project->slug]) }}>
                    {{-- <img src="{{ asset('storage/projects/'.$project->slug.'/'.$project->slug.'-timg.jpg') }}" /> --}}
                    <img src="https://via.placeholder.com/256x192" />
                    <div class="title">{{ $project->title }}</div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
