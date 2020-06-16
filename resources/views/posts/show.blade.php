@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-success btn-lg">Go back</a>
    <h1>{{$post->title}}</h1>
   
    <div>
        {!!$post->body!!} //do this to parse the HTML
    </div> 
    <hr>
    <small>Written on {{$post->created_at}}</small>
@endsection