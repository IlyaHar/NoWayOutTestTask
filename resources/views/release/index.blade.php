@extends('layouts.main')

@section('title') Releases @endsection

@section('content')
    <a href="{{ route('releases.create') }}" class="btn btn-success mb-4">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Version</th>
            <th scope="col">Name</th>
            <th scope="col">Created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($releases as $release)
            <tr>
                <th scope="row">{{ $release->id }}</th>
                <td>{{ $release->version }}</td>
                <td><a href="{{ route('releases.show', $release->id) }}">{{ $release->name }}</a></td>
                <td>{{ $release->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
