<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Serie extends Controller
{
    public function insertOne(Request $request)
    {
                    
                $serie = new \App\Serie;

                $serie->title = $request->title;
                $serie->publication_year = $request->publication_year;

                $serie->save();
                $serie->actors()->attach($request->input('actors'));
                $serie->genres()->attach($request->input('genres'));

                return redirect('/showseries');
    }


    public function updateOne(Request $request)
    {
                $serie = \App\Serie::find($request->id);

                $serie->title = $request->title;
                $serie->publication_year = $request->publication_year;
                
                $serie->actors()->detach();
                $serie->genres()->detach();

                $serie->actors()->attach($request->input('actors'));
                $serie->genres()->attach($request->input('genres'));
                
                $serie->save();

                return redirect('/showseries');
    }

    public function deleteOne(Request $request)
    {
                \App\Serie::destroy($request->id);

                return redirect('/showseries');
    }
}

