@extends('layouts.main')

@section('title') Create project @endsection

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name of project" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter description of project">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="Paste URL of image" value="{{ old('image') }}">
            @error('image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" name="domain" class="form-control @error('domain') is-invalid @enderror" placeholder="Enter domain of project" value="{{ old('domain') }}">
            @error('domain')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </form>
@endsection
