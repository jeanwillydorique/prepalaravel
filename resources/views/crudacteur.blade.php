@extends('layouts.app')

@section('title', 'Willy')

@include('layouts.asidecrud')


@section('content')
    
    <table>
            <caption>Liste des acteurs</caption>
         
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @foreach ($actors as $actor) 
            <tr>
                <td>{{$actor->first_name}}</td>
                <td>{{$actor->last_name}}</td>
                <td>
                        <form method="post" action="/deleteActor">
                                @csrf
                                <input type="hidden" name="id" value="{{$actor->id}}">
                                <input type="submit" value="X">
                        </form>
                </td>
                <td>
                        <form method="post" action="/updateActor">
                                @csrf
                                <input type="hidden" name="id" value="{{$actor->id}}">
                                <input type="submit" value="U">
                        </form>
                </td>
            </tr>
            @endforeach
    </table>
@endsection