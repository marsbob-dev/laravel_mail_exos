@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Articles</h1>
@stop

@section('content')
    <form action="/articles/{{$edit->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" value="{{$edit->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Content</label>
            <textarea name="content" class="form-control" id="" cols="30" rows="7">{{$edit->content}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop