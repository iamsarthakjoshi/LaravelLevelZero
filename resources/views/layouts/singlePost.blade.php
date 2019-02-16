<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Laravel Basics')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                padding-top: 2rem;
                margin: 0;
            }
      
            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                font-size: 3.5rem;
                }
            }
        </style>
    </head>
    <body>
        @include('inc.navbar')
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                    <div class="blog-post">
                        @yield('content')
                    </div><!-- /.blog-main -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </body>
</html>
