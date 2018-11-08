@extends('layouts.app')

@section('title', 'Willy')

@include('layouts.asidecrud')


@section('content')
    
    <table>
            <caption>Liste des acteurs</caption>
         
            <tr>
                <th>Nom</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @foreach ($genres as $genre) 
            <tr>
                <td>{{$genre->name}}</td>
                <td>
                        <form method="post" action="/deleteGenre">
                                @csrf
                                <input type="hidden" name="id" value="{{$genre->id}}">
                                <input type="submit" value="X">
                        </form>
                </td>
                <td>
                        <form method="post" action="/updateGenre">
                                @csrf
                                <input type="hidden" name="id" value="{{$genre->id}}">
                                <input type="submit" value="U">
                        </form>
                </td>
            </tr>
            @endforeach
    </table>
@endsection