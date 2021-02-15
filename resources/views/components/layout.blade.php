<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <style>
        body {
            background-color: rgb(190, 188, 184);
            font-family: 'Nunito';
        },
        html{
            -webkit-text-size-adjust:100%
        },
    </style>
    <body>
        <div class="container-fluid">
            <header class="container-lg">
                @include('includes.header')
            </header>
            <div id="main" class="container-lg p-3">
                @yield('content')
            </div>
            <footer class="container-lg p-3 fixed-bottom">
                @include('includes.footer')
            </footer>
        </div>
    </body>
</html>