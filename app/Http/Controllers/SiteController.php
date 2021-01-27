<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
    * Show the welcome page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function welcome()
    {
        return view('welcome')->with('projects', Project::all());
    }

    /**
    * Show the page with all realisations.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function realisations()
    {
        return view('welcome')->with('projects', Project::where('category', 'realisation')->get());
    }

    /**
    * Show the page with all competitions.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function competitions()
    {
        return view('welcome')->with('projects', Project::where('category', 'competition')->get());
    }

    /**
    * Show the office page.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function office()
    {
        return view('office');
    }

    /**
    * Show the page for a given project.
    *
    * @param int $slug
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function project($slug)
    {
        switch ($slug) {
            case 'project-slug' :
                return view('projects/'.$slug);
            default :
                abort(404);
        }
    }
}
