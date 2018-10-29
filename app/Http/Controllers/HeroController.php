<?php

namespace App\Http\Controllers;
use App\Hero;
use App\Emergency;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    //
    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show'); 
        $view->hero = $hero;
        return $view;
    }


    public function index()
    {
        $heros=Hero::orderBy('name', 'asc')->get();

        $view=view('hero/index',['heros'=>$heros]);

        return $view;
    }

    public function store(Request $request, $hero_slug)
    {   
       

       
        $emergency = Emergency::findOrFail($hero_slug);
        
         $emergency->fill($request->only([
             'subject',
             'description',
         ]));
          
         $emergency->save();

        return redirect(action('HeroController@show', $hero_slug)) ;
        
    }
}

