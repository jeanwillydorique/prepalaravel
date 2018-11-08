@extends('layouts.app')

@section('title', 'Willy')

@if (  $showAside === 1)
    @include('layouts.aside')
@endif

@section('content')

        <form method="post" action="/insertserie">
            @csrf <!-- permet de sécuriser les formulaires -->
            <div class="row">
                    <div class="col-25">
                        <label for="title">Title</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="title" placeholder="Title">
                    </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="DatePublication">Publication Year</label>
                </div>
                <div class="col-75">
                    <input type="number" name="publication_year" placeholder="Date">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                        <label for="DatePublication">Acteur</label>
                </div>
                <div class="col-75">
                    <select multiple name="actors[]">
                        @foreach ($actors as $actor)
                            <option value="{{ $actor->id }}">
                                {{ $actor->completeName() }}
                            </option>
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
                            <option value="{{ $genre->id }}">
                                {{ $genre->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>

@endsection

