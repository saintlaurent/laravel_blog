@extends('layout')

@include('nav')
@section('content')
    <h1>Create a post</h1>
    <hr>
    <form method="post" action="/posts">
        <label for="title">Title: </label>
        <input type="text" id="title" name="title">

        <label for="body">Content: </label>
        <textarea id="body" name="body"></textarea>

        <button type="submit">Publish Post</button>
        {{csrf_field()}}
    </form>
@endsection