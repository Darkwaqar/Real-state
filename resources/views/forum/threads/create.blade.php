<!-- resources/views/threads/create.blade.php -->
@extends('properties.layouts.main')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>Create New Topic</title>
</head>

    <style>

        .create_thread_wrapper {
            min-height: calc(100vh - 85px);
        }

        .create_thread_wrapper h1 {
            font-size: 24px;
            margin-top: 40px;
        }

        .create_thread_wrapper form {
            margin-top: 40px;
        }

        .create_thread_wrapper form div {
            margin-bottom: 20px;
        }

        .create_thread_wrapper form div label {
            display: block;
            margin-bottom: 5px;
        }

        .create_thread_wrapper .form_item {
            display: flex;
            flex-direction: column;

        }

        .create_thread_wrapper .form_item input {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
        }


        .create_thread_wrapper .form_item textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            box-sizing: border-box;
            height: 200px;
        }



    </style>

<body>

    <div class="container create_thread_wrapper">
        <h1>Create New Topic</h1>

        <form action="{{ route('forum.threads.store') }}" method="POST">
            @csrf

            <input type="hidden" name="forum_category_id" value="{{ $category->id }}">

            <div class="form_item">
                <label for="title">Title:</label>
                <input type="text" name="title" required>
            </div>

            <div class="form_item">
                <label for="description">Description:</label>
                <textarea name="description" required></textarea>
            </div>

            <div class="d-flex justify-content-end align-items-center">
                <button class="theme-btn btn-one ml-auto" type="submit">Create Topic</button>
            </div>
        </form>
    </div>

</body>
</html>
@endsection
