<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
        <title>{{"アプリのタイトル"}}</title>        
        <link rel="stylesheet" href="{{url('css/sandbox.css')}}" >
        @yield('head')
    </head>
    <body>
        @yield('contents')
        @yield('scripts')
    </body>
</html>

