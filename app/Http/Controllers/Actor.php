<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class Actor extends Controller
{
    public function insertOne(Request $request)
    {
                    
                $actors = new \App\Actor;

                $actors->first_name = $request->first_name;
                $actors->last_name = $request->last_name;

                $actors->save();

                return redirect('/crudacteur');
    }


    public function updateOne(Request $request)
    {
                $actors = \App\Actor::find($request->id);

                $actors->first_name = $request->first_name;
                $actors->last_name = $request->last_name;
                
                $actors->save();

                return redirect('/crudacteur');
    }

    public function deleteOne(Request $request)
    {
                \App\Actor::destroy($request->id);

                return redirect('/crudacteur');
    }
}

