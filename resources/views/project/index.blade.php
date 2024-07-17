@extends('layouts.main')

@section('title') Projects @endsection

@section('content')
    <a href="{{ route('projects.create') }}" class="btn btn-success mb-4">Create</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Domain</th>
            <th scope="col">Created_at</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td><a href="{{ route('projects.show', $project->id) }}">{{ $project->name }}</a></td>
                <td><a href="{{ $project->domain }}">{{ $project->domain }}</a></td>
                <td>{{ $project->created_at }}</td>
                <td class="d-flex">
                    <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger mx-3" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
