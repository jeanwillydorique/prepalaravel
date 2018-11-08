@extends('layouts.app')

@section('title', 'Willy')

@include('layouts.asidecrud')

@section('content')

        <form method="post" action="/insertActor">
            @csrf <!-- permet de sécuriser les formulaires -->
            <div class="row">
                    <div class="col-25">
                        <label for="frist name">First Name</label>
                    </div>
                    <div class="col-75">
                        <input type="text" name="first_name" placeholder="frist name">
                    </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="frist name">Last Name</label>
                </div>
                <div class="col-75">
                    <input type="text" name="last_name" placeholder="Last Name">
                </div>
            </div>
            <div class="row">
            <input type="submit" value="Submit">
            </div>
        </form>

@endsection

