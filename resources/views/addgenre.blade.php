@extends('layouts.app')

@section('title', 'Willy')

@include('layouts.asidecrud')

@section('content')

        <form method="post" action="/insertGenre">
            @csrf <!-- permet de sécuriser les formulaires -->
            <div class="row">
                    <div class="col-25">
                        <label for="name">Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="name" placeholder="name">
                    </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>

@endsection

