@extends('layouts.main')

@section('title') {{ $project->title }} @endsection

@section('content')
    <div class="d-flex mb-3">
        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger mx-3" value="Delete">
        </form>
    </div>
    <table class="table w-50">
        <tbody>
            <tr>
                <th scope="row">ID: </th>
                <td>{{ $project->id }}</td>
            </tr>
            <tr>
                <th scope="row">Name: </th>
                <td>{{ $project->name }}</td>
            </tr>
            <tr>
                <th scope="row">Description: </th>
                <td>{{ $project->description }}</td>
            </tr>
            <tr>
                <th scope="row">Image: </th>
                <td><img class="w-25" src="{{ $project->image }}" alt=""></td>
            </tr>
            <tr>
                <th scope="row">Domain: </th>
                <td><a href="{{ $project->domain }}">{{ $project->domain }}</a></td>
            </tr>
            <tr>
                <th scope="row">Created At: </th>
                <td>{{ $project->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">Updated At: </th>
                <td>{{ $project->updated_at->diffForHumans() }}</td>
            </tr>
        </tbody>
    </table>
@endsection
