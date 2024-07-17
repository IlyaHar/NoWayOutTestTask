@extends('layouts.main')

@section('title') Features @endsection

@section('content')
    <a href="{{ route('features.create') }}" class="btn btn-success mb-4">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Release</th>
            <th scope="col">Name</th>
            <th scope="col">Created_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($features as $feature)
            <tr>
                <th scope="row">{{ $feature->id }}</th>
                <td>{{ $feature->release->name }}</td>
                <td>{{ $feature->name }}</td>
                <td>{{ $feature->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
