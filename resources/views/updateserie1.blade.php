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
                        <select multiple name="actors[]">
                            @foreach ($actors as $actor)

                            <option 
                                    @foreach ($series->actors as $seriesactoritem)
                                        @if ( $actor->id == $seriesactoritem->id )
                                        selected 
                                        @endif
                                    @endforeach
                            value="{{ $actor->id }}"> {{ $actor->completeName() }}</option>   

                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                            <label for="DatePublication">Genre</label>
                    </div>
                    <div class="col-75">
                        <select multiple name="genres[]">
                            @foreach ($genres as $genre)
                            <option 
                                    @foreach ($series->genres as $seriesgenreitem)
                                        @if ( $genre->id == $seriesgenreitem->id )
                                        selected 
                                        @endif
                                    @endforeach
                            value="{{ $genre->id }}"> {{ $genre->name }}</option> 
                            @endforeach
                        </select>
                    </div>
                </div>  
            <div class="row">
            <input type="submit" value="Update">
            </div>
        </form>

@endsection

