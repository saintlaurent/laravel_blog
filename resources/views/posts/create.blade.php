@extends('layout')

@include('nav')
@section('content')
    <h1>Create a post</h1>
    <hr>
    <form method="post" action="/posts">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">

        <label for="body">Content: </label>
        <input type="text" id="body" name="body">

        <input type="submit">
        {{csrf_field()}}
    </form>
@endsection