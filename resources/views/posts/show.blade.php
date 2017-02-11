@extends('layout')

@section('content')
    <h2>{{$post->title}}</h2>
    <p>{{$post->body}}</p>
    <hr>

    <div>
        @foreach($post->comments as $comment)
            <article>
                {{$comment->body}}
            </article>
        @endforeach
    </div>

    {{-- Add a comment --}}
    @if (Auth::check())
    <div>
        <form method="POST" action="/posts/{{$post->id}}/comments/">
            <label for="comment_body">Comment: </label>
            <textarea name="body" id="comment_body" placeholder="Your comment here.">

            </textarea>

            <button type="submit">Add Comment</button>

            {{csrf_field()}}
        </form>
    </div>
    @endif
@endsection