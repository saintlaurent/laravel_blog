@extends('layout')

@section('content')
    <h1>Register</h1>

    <form>
        {{csrf_field()}}

        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <br>
        <label for="email">Email: </label>
        <input type="text" id="email" name="email">
        <br>
        <label for="password">Password: </label>
        <input type="password" id="password" name="password">

        <br>
        <button type="submit">Register</button>

    </form>
@endsection