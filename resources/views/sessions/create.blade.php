@extends('layout')

@section('content')
    <h1>Sign In</h1>

    <form method="POST" action="/login">
        {{csrf_field()}}


        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">

        <br>
        <button type="submit">Sign In</button>
        @include('errors')
    </form>
@endsection