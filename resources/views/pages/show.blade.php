@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">User Details</h1>
@stop

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">{{$show->name}}</h1>
        <p class="lead">Role : {{$show->roles->name}}</p>
        <p class="lead">Email : {{$show->email}}</p>
        <hr class="my-4">
        <div class="d-flex">
            <a class="btn btn-outline-secondary mr-5" href="/users">Back</a>
            @can('deleteUser', $show)
                <a class="btn btn-success" href="/users/{{$show->id}}/edit">Edit</a> 
            @endcan
        </div>
    </div>
@stop