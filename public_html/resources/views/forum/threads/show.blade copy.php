<!-- resources/views/threads/show.blade.php -->
@extends('properties.layouts.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Thread: {{ $thread->title }}</title>
</head>
<body>
    <h1>Thread: {{ $thread->title }}</h1>
    <p>{{ $thread->description }}</p>

    <h2>Comments</h2>
    @dd($thread['forum_comments']);
    @if(isset($thread['forum_comments']) && count($thread['forum_comments']) > 0)
        @foreach ($thread['forum_comments'] as $comment)
            <div>
                <p>{{ $comment->content }}</p>

                <h4>Replies</h4>

                {{-- @foreach ($comment->childComments as $reply)
                    <p>{{ $reply->content }}</p>
                @endforeach --}}

                <form action="{{ route('forum.comments.store') }}" method="POST">
                    @csrf

                    <input type="hidden" name="forum_thread_id" value="{{ $comment->forum_thread_id }}">
                    <input type="hidden" name="forum_comment_id" value="{{ $comment->id }}">

                    <textarea name="content" required></textarea>
                    <button type="submit">Reply</button>
                </form>
            </div>
        @endforeach
    @else
    <h5> No Comment Found</h5>
    @endif

    <form action="{{ route('forum.comments.store') }}" method="POST">
        @csrf

        <input type="hidden" name="forum_thread_id" value="{{ $thread->id }}">

        <textarea name="content" required></textarea>
        <button type="submit">Add Comment</button>
    </form>
</body>
</html>
@endsection


