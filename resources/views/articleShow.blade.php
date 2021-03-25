@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Details</h1>
@stop

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">{{$show->title}}</h1>
        <p class="lead">Author : {{$show->users->name}}</p>
        <p>{{$show->content}}</p>
        <hr class="my-4">
       <div class="d-flex">
            <a class="btn btn-success btn-lg mx-2" href="/articles/{{$show->id}}/edit" role="button">Edit</a>
            <form action="articles/{{$show->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-lg mx-2" type="submit">Delete</button>
            </form>
       </div>
    </div>
@stop