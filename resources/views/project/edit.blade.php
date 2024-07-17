@extends('layouts.main')

@section('title') Edit project @endsection

@section('content')
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name of project" value="{{ old('name', $project->name) }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter description of project">{{ old('description', $project->description) }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <img class="mb-2 w-25" src="{{ $project->image }}" alt="">
            <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Paste URL of image" value="{{ old('image', $project->image) }}">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" name="domain" class="form-control @error('domain') is-invalid @enderror" placeholder="Enter domain of project" value="{{ old('domain', $project->domain) }}">
            @error('domain')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Update">
        </div>
    </form>
@endsection
