@extends('layouts.main')

@section('title') Home @endsection

@section('content')
    @foreach($projects as $project)
            <div class="btn btn-dark mt-3">
                @if($project->releases->isNotEmpty())
                    @php
                        $latestRelease = $project->releases->sortByDesc('created_at')->first();
                    @endphp
                    <div class="btn btn-dark">{{ $latestRelease->version }}</div>
                @endif
            </div>
            <div class="mt-2 mb-2"><strong>Features: </strong>
            @foreach($project->releases as $release)
                    @foreach($release->features as $feature)
                        <li>{{ $feature->name }}</li>
                    @endforeach
            @endforeach
            </div>
            <div class="mt-3">
                <h1>{{ $project->name }}</h1>
                <p>{{ $project->description }}</p>
                <img class="w-25 mb-3" src="{{ $project->image }}" alt="">
                <p><a href="{{ $project->domain }}">{{ $project->domain }}</a></p>
            </div>
    @endforeach
@endsection
