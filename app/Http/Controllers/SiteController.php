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
        ->with('projects', Project::all()->shuffle())
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
    * Show the page with all collective housing.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function collectiveHousing()
    {
        return view('gallery')
        ->with('projects', Project::where('category', 'collective-housing')->get());
    }

    /**
    * Show the page with all individual housing.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function individualHousing()
    {
        return view('gallery')
        ->with('projects', Project::where('category', 'individual-housing')->get());
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
        $view = "projects/" . $slug;
        if (view()->exists($view)) {
            return view($view)
            ->with('project', Project::where('slug', $slug)->first());
        }
        abort(404);
    }
}
