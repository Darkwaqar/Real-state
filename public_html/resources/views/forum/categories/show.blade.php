<!-- resources/views/categories/show.blade.php -->
@extends('properties.layouts.main')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Category: {{ $category->name }}</title>
    </head>

    <style>
        .threads_wrapper {
            min-height: calc(100vh - 85px);
        }

        .threads_wrapper h1 {
            font-size: 24px;


        }

        .threads_wrapper .flex_between {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .threads_wrapper h1 span {
            color: #de1e25;
        }

        .threads_wrapper .threade_row {
            display: flex;
        }

        .threads_wrapper .threade_row .threade_box {
            padding: 10px;
            flex-basis: 50%
        }

        .threads_wrapper ._content {
            border: 1px solid #ededed;
            padding: 15px;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .threads_wrapper ._content h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .threads_wrapper ._content p {
            font-size: 14px;
            margin-bottom: 10px;

            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 3;
            /* number of lines to show */
            -webkit-box-orient: vertical;


        }

        .threads_wrapper ._content a {
            font-size: 14px;
            color: #de1e25;
            text-decoration: underline;
            margin-left: auto;
        }

        /* @media screen and (max-width: 768px) {
                .threads_wrapper .threade_row {
                    flex-direction: column;
                }

                .threads_wrapper .threade_row .threade_box {
                    flex-basis: 100%
                }
            } */
    </style>

    <body>
        <div class="container threads_wrapper">

            <div class="flex_between">
                <h1>Category: <span>{{ $category->name }}</span></h1>
                <a class="theme-btn btn-one" href="{{ route('forum.threads.create', $category) }}">Create New Topic</a>
            </div>

            <h1 class="mb-3">Topics</h1>

            <div class="row">
                @foreach ($threads as $thread)
                    <div class="col-lg-6 p-3">
                        <div class="_content">
                            <h3>{{ $thread->title }}</h3>
                            <p>{{ $thread->description }}</p>
                            <a href="{{ route('forum.threads.show', $thread) }}">View Topic</a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $threads->links() }}
        </div>
    </body>

    </html>
@endsection
