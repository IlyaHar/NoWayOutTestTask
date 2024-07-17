<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReleaseRequest;
use App\Models\Project;
use App\Models\Release;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $releases = Release::query()->orderBy('created_at', 'DESC')->get();
        return view('release.index', compact('releases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        return view('release.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReleaseRequest $request)
    {
        $data = $request->validated();

        Release::query()->firstOrCreate([
            'name' => $data['name']
        ], $data);

        return redirect()->route('releases.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Release $release)
    {
        return view('release.show', compact('release'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Release $release)
    {
        return view('release.edit', compact('release'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReleaseRequest $request, Release $release)
    {
        $data = $request->validated();

        $release->update($data);

        return redirect()->route('releases.show', $release->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Release $release)
    {
        $release->delete();

        return redirect()->route('releases.index');
    }
}
