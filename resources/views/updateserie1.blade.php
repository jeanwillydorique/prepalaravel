@extends('layouts.app')

@section('title', 'Willy')

@if (  $showAside === 1)
    @include('layouts.aside')
@endif

@section('content')
        <form method="post" action="/updateserie">
            @csrf <!-- permet de sécuriser les formulaires -->
            <input type="hidden" name="id" placeholder="Title" value="{{$series->id}}">
            <div class="row">
            <div class="col-25">
                <label for="title">Title</label>
            </div>
            <div class="col-75">
                <input type="text" name="title" placeholder="Title" value="{{$series->title}}">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="DatePublication">Publication Year</label>
            </div>
            <div class="col-75">
                <input type="number" name="publication_year" placeholder="Date" value="{{$series->publication_year}}">
            </div>
            </div>
            <div class="row">
                    <div class="col-25">
                            <label for="DatePublication">Acteur</label>
                    </div>
                    <div class="col-75">
                        <select name="actors">
                            @foreach ($actors as $actor)
                                @if ( @isset($series->actors[0]->id) && $actor->id == $series->actors[0]->id )
                                    <option selected value="{{ $actor->id }}"> {{ $actor->completeName() }}</option>
                                @else
                                    <option value="{{ $actor->id }}"> {{ $actor->completeName() }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                            <label for="DatePublication">Genre</label>
                    </div>
                    <div class="col-75">
                        <select name="genres">
                            @foreach ($genres as $genre)
                                @if ( @isset($series->genres[0]->id) && $genre->id == $series->genres[0]->id )
                                <option selected value="{{ $genre->id }}"> {{ $genre->name }}</option>
                                @else
                                <option value="{{ $genre->id }}"> {{ $genre->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>  
            <div class="row">
            <input type="submit" value="Update">
            </div>
        </form>

@endsection

