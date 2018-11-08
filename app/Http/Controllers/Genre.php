<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Genre extends Controller
{
    public function insertOne(Request $request)
    {
                    
                $genres = new \App\Genre;

                $genres->name = $request->name;

                $genres->save();

                return redirect('/crudgenre');
    }


    public function updateOne(Request $request)
    {
                $genres = \App\Genre::find($request->id);

                $genres->name = $request->name;
                
                $genres->save();

                return redirect('/crudgenre');
    }

    public function deleteOne(Request $request)
    {
                \App\Genre::destroy($request->id);

                return redirect('/crudgenre');
    }
}

