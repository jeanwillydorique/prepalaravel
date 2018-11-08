<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie as Serie;
use App\Actor as Actor;
use App\Genre as Genre;

class View extends Controller
{
    public function showSeries()
    {   
        $series = Serie::all();
        return view('showseries', [
            "showAside" => 1,
            'series' => $series, 
        ]);
    }

    public function showActors()
    {   
        $actors = Actor::all();
        return view('crudacteur', [
            'actors' => $actors, 
        ]);
    }

    public function showGenres()
    {   
        $genres = Genre::all();
        return view('crudgenre', [
            'genres' => $genres, 
        ]);
    }

    public function showSeries1(Request $request)
    {   
        $series = Serie::find($request->id);
        $actors = Actor::all();
        $genres = Genre::all();
        return view('updateserie1', [
            "showAside" => 1,
            'series' => $series,
            "actors" => $actors,
            "genres" => $genres, 
        ]);
    }

    public function showActorUpdate(Request $request)
    {   
        $actors = Actor::find($request->id);
        return view('updateactor', [
            "actors" => $actors,
        ]);
    }

    public function showGenreUpdate(Request $request)
    {   
        $genres = Genre::find($request->id);
        return view('updategenre', [
            "genres" => $genres,
        ]);
    }

    public function addSeries()
    {
        $actors = Actor::all();
        $genres = Genre::all();
        return view('addseries', [
            "showAside" => 1,
            "actors" => $actors,
            "genres" => $genres,
        ]);
    }
    public function addActor()
    {
        return view('addactor', [
        ]);
    }
    public function addGenre()
    {

        return view('addgenre', [
        ]);
    }
    public function updateSeries()
    {
        $series = Serie::all();
        return view('updateserie', [
            "showAside" => 1,
            "series" => $series,
        ]);
    }


}

