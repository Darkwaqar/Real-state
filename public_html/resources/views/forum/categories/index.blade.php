<!-- resources/views/categories/index.blade.php -->
@extends('properties.layouts.main')
@section('content')
    <!DOCTYPE html>
    <html>

    <head>
        <title>Forum Categories</title>
    </head>

    <style>
        .forum_category_wrapper {
            height: calc(100vh - 85px);
        }

        .forum_category_wrapper h1 {
            font-size: 30px;
            margin-left: 15px;
            margin-top: 40px;
        }

        .forum_category_wrapper ul {
            list-style: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            margin: 40px 0 0 0;
            margin-right: 10px
        }

        .forum_category_wrapper ul li {
            flex-basis: calc(100% / 4 - 10px);
            /* Adjusted flex-basis to accommodate the gap */
            padding: 10px;
            box-sizing: border-box;
            min-width: 200px;
        }

        .forum_category_wrapper ul li a {
            border: 1px solid #ededed;
            flex: 1;
            display: block;
            height: 100px;
            padding: 10px;
            color: #000;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #de1e25;
            color: #fff;
            font-size: 16px;
            margin-top: 0;

        }



        /* Responsive styles */
        @media screen and (max-width: 768px) {
            .forum_category_wrapper ul li {
                flex-basis: calc(100% / 2 - 10px);
                /* Adjusted flex-basis for two columns */
            }
        }

        @media screen and (max-width: 480px) {
            .forum_category_wrapper ul li {
                flex-basis: 100%;
                /* Full width for single column */
            }
        }
    </style>



    <body>

        <div class="forum_category_wrapper">
            <div class="container">
                <h1>Forum Categories</h1>

                <ul class=>
                    @foreach ($categories as $category)
                        <li>
                            <a class="theme-btn btn-one"
                                href="{{ route('forum.categories.show', $category) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{ $categories->links() }}
    </body>

    </html>
@endsection
