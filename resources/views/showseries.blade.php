@extends('layouts.app')

@section('title', 'Willy')

@if (  $showAside === 1)
    @include('layouts.aside')
@endif

@section('content')
    
    <table>
            <caption>Liste des séries</caption>
         
            <tr>
                <th>Nom</th>
                <th>Date de publication</th>
                <th>Auteur</th>
                <th>genre</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
            @foreach ($series as $serie) 
            <tr>
                <td>{{$serie->title}}</td>
                <td>{{$serie->publication_year}}</td>
                <td>

                        @foreach ($serie->actors as $actor)
                            {{ $actor->completeName() }}</br>
                        @endforeach
                </td>
                <td>
                        @foreach ($serie->genres as $genre)
                            {{ $genre->name }}</br>           
                        @endforeach
                </td>
                <td>
                        <form method="post" action="/deleteserie">
                                @csrf
                                <input type="hidden" name="id" value="{{$serie->id}}">
                                <input type="submit" value="X">
                        </form>
                </td>
                <td>
                        <form method="post" action="/updateserie1">
                                @csrf
                                <input type="hidden" name="id" value="{{$serie->id}}">
                                <input type="submit" value="U">
                        </form>
                </td>
            </tr>
            @endforeach
    </table>
@endsection