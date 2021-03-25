@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Mails List</h1>
@stop

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Subject</th>
            <th scope="col">Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($emails as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->email}}</td>
                <td>{{$item->subjects->subject}}</td>
                <td>{{$item->content}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop