@extends('layouts.app')

@section('title', 'Willy')

@include('layouts.asidecrud')


@section('content')
        <form method="post" action="/updateActor1">
            @csrf <!-- permet de sécuriser les formulaires -->
            <input type="hidden" name="id" placeholder="Title" value="{{$actors->id}}">
            <div class="row">
            <div class="col-25">
                <label for="title">First Name</label>
            </div>
            <div class="col-75">
                <input type="text" name="first_name" placeholder="first_name" value="{{$actors->first_name}}">
            </div>
            </div>
            <div class="row">
            <div class="col-25">
                <label for="DatePublication">Last Name</label>
            </div>
            <div class="col-75">
                <input type="text" name="last_name" placeholder="last_name" value="{{$actors->last_name}}">
            </div>
            </div> 
            <div class="row">
            <input type="submit" value="Update">
            </div>
        </form>

@endsection

