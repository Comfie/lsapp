@extends('layouts.app')
@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>THis is my laravel application from the "Laravale Practive"</p>
        <p>
            <a href="/login" class="btn btn-primary btn-lg" role="button">login</a>
            <a href="/register" class="btn btn-success btn-lg" role="button">Register</a>
        </p>
    </div>
@endsection

 