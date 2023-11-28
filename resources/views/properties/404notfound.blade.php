@extends('properties.layouts.main')

@section('content')
    <style>
        .section-404 {
            padding: 4rem 2rem;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .section-404 .error-404 {
            font-size: 150px;
            color: #de1e25;
            text-shadow:
                1px 1px 1px #de1e25,
                2px 2px 1px #de1e25,
                3px 3px 1px #de1e25,
                4px 4px 1px #de1e25,
                5px 5px 1px #de1e25,
                6px 6px 1px #de1e25,
                7px 7px 1px #de1e25,
                8px 8px 1px #de1e25,
                25px 25px 8px rgba(0, 0, 0, 0.2);
        }

        .page-404 {
            margin: 2rem 0;
            font-size: 20px;
            font-weight: 600;
            color: #444;
        }

        .back-home-404 {
            display: inline-block;
            border: 2px solid #222;
            color: #222;
            text-transform: uppercase;
            font-weight: 600;
            padding: 0.75rem 1rem 0.6rem;
            transition: all 0.2s linear;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.3);
        }
    </style>

    <body>
        <div class="section-404">
            <h1 class="error-404">404</h1>
            <div class="page-404">Ooops!!! The page you are looking for is not found</div>
            <a class="theme-btn btn-one" href="#!">Back to home</a>
        </div>
    @endsection
