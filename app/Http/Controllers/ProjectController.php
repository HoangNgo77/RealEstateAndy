<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()
            ->where('published_at', '<=', now())
            ->where('is_published', true)
            ->paginate(10);

        return view('pages.projects', compact('projects'));
    }

    public function show(Project $project)
    {
        if (! $project->is_published || $project->published_at > now()) {
            abort(404);
        }

        $recentProjects = Project::where('is_published', true)
            ->where('id', '!=', $project->id)
            ->latest('published_at')
            ->take(3)
            ->get();

        $project->record();

        return view('pages.project-detail', compact('project', 'recentProjects'));
    }
}
