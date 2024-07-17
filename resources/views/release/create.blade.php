@extends('layouts.main')

@section('title') Create release @endsection

@section('content')
    <form action="{{ route('releases.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="version" class="form-control @error('version') is-invalid @enderror" placeholder="Enter version of release" value="{{ old('version') }}">
            @error('version')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter name of release" value="{{ old('name') }}">
            @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter description of release">{{ old('description') }}</textarea>
            @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <textarea name="text" class="form-control @error('text') is-invalid @enderror" placeholder="Enter text of release">{{ old('text') }}</textarea>
            @error('text')
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
            <input type="text" name="video" class="form-control @error('video') is-invalid @enderror" placeholder="Paste URL of video" value="{{ old('video') }}">
            @error('video')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="text" name="link" class="form-control @error('link') is-invalid @enderror" placeholder="Enter link of release" value="{{ old('link') }}">
            @error('link')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="is_protected">Is protected?</label>
            <input type="checkbox" name="is_protected" class=" @error('is_protected') is-invalid @enderror" value="1" {{ old('is_protected' )  ? 'checked' : '' }}>
            @error('is_protected')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <select name="project_id" class="form-control">
                @foreach($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary" value="Create">
        </div>
    </form>
@endsection
