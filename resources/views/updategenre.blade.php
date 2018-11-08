@extends('layouts.app')

@section('title', 'Willy')

@include('layouts.asidecrud')


@section('content')
        <form method="post" action="/updateGenre1">
            @csrf <!-- permet de sécuriser les formulaires -->
            <input type="hidden" name="id" placeholder="Title" value="{{$genres->id}}">
            <div class="row">
            <div class="col-25">
                <label for="title">Name</label>
            </div>
            <div class="col-75">
                <input type="text" name="name" placeholder="first_name" value="{{$genres->name}}">
            </div>
            </div>
            <div class="row">
            <input type="submit" value="Update">
            </div>
        </form>

@endsection
