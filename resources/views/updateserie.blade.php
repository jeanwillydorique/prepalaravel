@extends('layouts.app')

@section('title', 'Willy')

@if (  $showAside === 1)
    @include('layouts.aside')
@endif

@section('content')


        @foreach ($series as $serie) 
        <form method="post" action="/updateserie">
            @csrf <!-- permet de sécuriser les formulaires -->
            <input type="hidden" name="id" placeholder="Title" value="{{$serie->id}}">
            <div class="row">
            <div class="col-25">
                <label for="title">Title</label>
            </div>
            <div class="col-75">
                <input type="text" name="title" placeholder="Title" value="{{$serie->title}}">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="DatePublication">Publication Year</label>
            </div>
            <div class="col-75">
                <input type="number" name="publication_year" placeholder="Date" value="{{$serie->publication_year}}">
            </div>
            </div>
            <div class="row">
            <input type="submit" value="Update">
            </div>
        </form>
        @endforeach

@endsection

