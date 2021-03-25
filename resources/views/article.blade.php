@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Articles</h1>
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($articles as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->title}}</td>
            <td>{{$item->users->name}}</td>
            <td>
                <a class="btn btn-info" href="articles/{{$item->id}}">Details</a>
            </td>
            @can('deletePost', $item)
              <td>
                <form action="/articles/{{$item->id}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
              </td>
            @else
              <td></td>
            @endcan
        </tr>
      @endforeach
    </tbody>
  </table>
@stop