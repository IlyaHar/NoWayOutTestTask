@extends('layouts.main')

@section('title') {{ $feature->title }} @endsection

@section('content')
    <table class="table w-50">
        <tbody>
            <tr>
                <th scope="row">ID: </th>
                <td>{{ $feature->id }}</td>
            </tr>
            <tr>
                <th scope="row">Release: </th>
                <td>{{ $feature->release->name }}</td>
            </tr>
            <tr>
                <th scope="row">Name: </th>
                <td>{{ $feature->name }}</td>
            </tr>
            <tr>
                <th scope="row">Description: </th>
                <td>{{ $feature->description }}</td>
            </tr>
            <tr>
                <th scope="row">Image: </th>
                <td><img src="{{ $feature->image }}" alt=""></td>
            </tr>
            <tr>
                <th scope="row">Video: </th>
                <td>{{ $feature->video }}</td>
            </tr>
            <tr>
                <th scope="row">Link: </th>
                <td>{{ $feature->link }}</td>
            </tr>
            <tr>
                <th scope="row">Created At: </th>
                <td>{{ $feature->created_at }}</td>
            </tr>
            <tr>
                <th scope="row">Updated At: </th>
                <td>{{ $feature->updated_at->diffForHumans() }}</td>
            </tr>
        </tbody>
    </table>
@endsection
