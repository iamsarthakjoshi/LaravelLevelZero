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

            .starter-template {
                padding: 3rem 1.5rem;
                text-align: center;
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
        <main role="main" class="container">
            <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
                <div class="col-md-6 px-0">
                    <h1 class="display-5 font-bold">Blog Post</h1>
                    <p class="lead my-3">Amazing thoughts and ideas.</p>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
         </main><!-- /.container -->
    </body>
</html>
