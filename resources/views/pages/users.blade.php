@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">User</h1>
@stop

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col"></th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $item)
        <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->name}}</td>
            <td>{{$item->roles->name}}</td>
            <td>
                <a class="btn btn-info" href="users/{{$item->id}}">Details</a>
            </td>
            @can('deleteUser', $item)
              <td>
                <form action="/users/{{$item->id}}" method="post">
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