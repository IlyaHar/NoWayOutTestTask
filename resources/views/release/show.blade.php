@extends('layouts.main')

@section('title') {{ $release->title }} @endsection

@section('content')
    <table class="table w-50">
        <tbody>
            <tr>
                <th scope="row">ID: </th>
                <td>{{ $release->id }}</td>
            </tr>
            <tr>
                <th scope="row">Version: </th>
                <td>{{ $release->version }}</td>
            </tr>
            <tr>
                <th scope="row">Name: </th>
                <td>{{ $release->name }}</td>
            </tr>
            <tr>
                <th scope="row">Description: </th>
                <td>{{ $release->description }}</td>
            </tr>
            <tr>
                <th scope="row">Text: </th>
                <td>{{ $release->text }}</td>
            </tr>
            <tr>
                <th scope="row">Image: </th>
                <td><img src="{{ $release->image }}" alt=""></td>
            </tr>
            <tr>
                <th scope="row">Video: </th>
                <td><iframe src="{{ $release->video }}"></iframe></td>
            </tr>
            <tr>
                <th scope="row">Link: </th>
                <td><a href="{{ $release->link }}"></a></td>
            </tr>
            <tr>
                <th scope="row">Is protected: </th>
                <td>{{ $release->is_protected === 1 ? 'Yes' : 'No'}}</td>
            </tr>
            <tr>
                <th scope="row">Project </th>
                <td><a href="{{ $release->project->domain }}">{{ $release->project->name }}</a></td>
            </tr>
            <tr>
                <th scope="row">Created At: </th>
                <td>{{ $release->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">Updated At: </th>
                <td>{{ $release->updated_at->diffForHumans() }}</td>
            </tr>
        </tbody>
    </table>
@endsection
