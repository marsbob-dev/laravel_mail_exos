@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">New Articles</h1>
@stop

@section('content')
    <form action="/articles" method="POST">
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Content</label>
            <textarea name="content" class="form-control" id="" cols="30" rows="7"></textarea>
        </div>
        <input type="number" class="form-control d-none" name="user_id" value="{{Auth::id()}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop