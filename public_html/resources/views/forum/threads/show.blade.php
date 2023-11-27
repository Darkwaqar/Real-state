<!-- resources/views/threads/show.blade.php -->
@extends('properties.layouts.main')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Thread: {{ $thread->title }}</title>
    </head>


    <style>
        .view_threade_wrapper {
            min-height: calc(100vh - 85px);
            padding: 60px 20px;
        }


        .view_threade_wrapper .treade_view {
            border-radius: 10px;
            /* border: 1px solid #ededed; */
            padding: 15px;
            margin-bottom: 20px;
            background-color: #fcfcfc;
            box-shadow: 0 0 10px #d4d4d4;
        }

        .view_threade_wrapper .treade_view h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .view_threade_wrapper .treade_view h1 span {
            color: #de1e25;
        }

        .view_threade_wrapper .treade_view ._detail {
            font-size: 14px;
            margin-bottom: 20px;
        }

        .view_threade_wrapper .add_comment_wrapper {
            margin-top: 20px;
        }

        .view_threade_wrapper .comments {
            list-style: none;
            padding: 0;
            margin: 0;
            padding-left: 30px;

        }

        .view_threade_wrapper .comments:first-child {
            padding-left: 0;

        }

        .view_threade_wrapper .comments li {
            background: #e8e8e8;
            margin: 10px 0;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 2px 2px 5px #d4d4d4;
            width: max-content;
            position: relative;
        }

        .view_threade_wrapper .comments li::before {
            content: '';
            position: absolute;
            top: 50%;
            left: -10px;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 10px solid #e8e8e8;
            transform: translateY(-50%);
        }

        .view_threade_wrapper .comments li.reply_style::before {
            /* content: unset */
        }

        .view_threade_wrapper .comments.right_side {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            padding-left: 0;
            padding-right: 30px;
        }

        .view_threade_wrapper .comments.right_side li {
            align-self: flex-end;
            background: #de1e25;
            color: #fff;
        }
        .view_threade_wrapper .comments.right_side li p {
            text-align: right;
            color: #fff;
        }

        .view_threade_wrapper .comments.right_side li::before {
            left: unset;
            right: -10px;
            border-right: unset;
            border-left: 10px solid #de1e25;
        }

        

        .view_threade_wrapper .add_comment_wrapper .form_item {
            display: flex;
            align-items: center;
        }

        .view_threade_wrapper .add_comment_wrapper .form_item textarea {
            flex: 1;
            border: 1px solid #dfdfdf;
            padding: 10px;
            border-radius: 15px;
            resize: none;
            margin-right: 10px;
            height: 50px;
        }

        .view_threade_wrapper .add_comment_wrapper .form_item textarea::placeholder {
            color: #d4d4d4
        }

        .view_threade_wrapper .add_comment_wrapper .form_item button {
            background-color: #de1e25;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>



    <body>
        <div class="view_threade_wrapper container">

            <div class="treade_view">

                <h1>Topic: <span>{{ $thread->title }}</span></h1>
                <p class="_detail">{{ $thread->description }}</p>
                {{-- @dd($thread); --}}
                <h1>Comments</h1>
                @if (isset($thread['forum_comments']) && count($thread['forum_comments']) > 0)
                    @foreach ($thread['forum_comments'] as $comment)
                        @if ($comment->forum_comment_id === null)
                            <div>
                                <ul class="comments">
                                    <div class="icon d-flex align-items-center">
                                        <div>
                                        @if(!empty($comment['user']['user_dp']))
                                            <img width="50px" class="lazy rounded-circle" data-src="{{asset('public/images/userdp/'. $comment['user']['user_dp'])}}" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                        @endif
                                        </div>
                                        <div class="ml-4">
                                            <li class="px-4 py-3">
                                                <p>{{ $comment->content }}</p>
                                            </li>
                                        </div>
                                    </div>
                                    <div class="d-flex ">
                                        <p class="text-secondary fs_14">{{ isset($comment['user']['first_name']) ? $comment['user']['first_name'] : ''}}</p>
                                        <p class="time ml-4 text-secondary fs_14">{{ \Carbon\Carbon::parse($comment->created_at)->format('d F') }}</p>
                                    </div>
                                    <ul class="comments p-0">
                                        @php
                                            $replies = $comment->childComments;
                                        @endphp
                                        @while (count($replies) > 0)
                                            @foreach ($replies as $reply)
                                            <div class="d-flex align-items-center ml-5">
                                                <p class="text-secondary fs_14">{{ $reply['user']['first_name']}}</p>
                                                <div>
                                                 @if (!empty($reply['user']['user_dp']))
                                                <img width="50px" class="lazy rounded-circle" data-src="{{asset('public/images/userdp/'.$reply['user']['user_dp'])}}" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
                                                @else
                                                <img width="50px" class="lazy rounded-circle" data-src="{{asset('public/images/userdp/profile.jpg')}}" alt="" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">

                                                @endif
                                            </div>
                                                <li class="reply_style ml-4 p-1">
                                                    <p>{{ $reply->content }}</p>
                                                    @php
                                                        $replies = $reply->childComments;
                                                    @endphp
                                                </li>
                                            </div>
                                            @endforeach
                                        @endwhile
                                    </ul>
                                </ul>
                                {{-- <ul class="comments right_side">
                                    <li>
                                        <p>{{ $comment->content }}</p>
                                    </li>
                                    <ul class="comments right_side">
                                        @php
                                            $replies = $comment->childComments;
                                        @endphp
                                        @while (count($replies) > 0)
                                            @foreach ($replies as $reply)
                                                <li class="reply_style">
                                                    <p>{{ $reply->content }}</p>
                                                    @php
                                                        $replies = $reply->childComments;
                                                    @endphp
                                                </li>
                                            @endforeach
                                        @endwhile
                                    </ul>
                                </ul> --}}

                                <form class="add_comment_wrapper" action="{{ route('forum.comments.store') }}"
                                    method="POST">
                                    @csrf
                                    <input type="hidden" name="forum_thread_id" value="{{ $comment->forum_thread_id }}">
                                    <input type="hidden" name="forum_comment_id" value="{{ $comment->id }}">
                                    <div class="form_item">
                                        <textarea placeholder="Write your reply!" name="content" required></textarea>
                                        <button class="theme-btn btn-one" type="submit">Reply</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    @endforeach
                @else
                    <h5>No Comment Found</h5>
                @endif

                <form class="add_comment_wrapper" action="{{ route('forum.comments.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="forum_thread_id" value="{{ $thread->id }}">
                    <div class="form_item">
                        <textarea placeholder="Write your comment!" name="content" required></textarea>
                        <button class="theme-btn btn-one" type="submit">Add A New Comment</button>
                    </div>
                </form>
            </div>

        </div>
    </body>

    </html>
@endsection
