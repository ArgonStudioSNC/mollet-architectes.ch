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
        return view('gallery')
        ->with('projects', Project::all())
        ->with('hideTitle', true);
    }

    /**
    * Show the page with all public buildings.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function publicBuildings()
    {
        return view('gallery')
        ->with('projects', Project::where('category', 'public-building')->get());
    }

    /**
    * Show the page with all residential houses.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function residentialHouses()
    {
        return view('gallery')
        ->with('projects', Project::where('category', 'residential-house')->get());
    }

    /**
    * Show the page with all competitions.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function competitions()
    {
        return view('competitions');
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
            case 'bourg-21-27-29' :
            case 'chemin-du-clos' :
            case 'chemin-vert' :
            case 'cp-moutier' :
            case 'home-d-orvin' :
                return view('projects/'.$slug)
                ->with('project', Project::where('slug', $slug)->first());
            default :
                abort(404);
        }
    }
}
