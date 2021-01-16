<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TodoList</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

       <!--Script-->
       <script src="{{asset('js/app.js') }}" defer></script>
        
       <!--Styles -->
       <link href = "{{asset('css/app.css') }}" rel = "stylesheet">


        
    </head>
    <body>
        @yield('content')
    </body>



    <style>
 body{
width:100vw;
 height:100vh;
 background: rgb(8,107,186);
background: linear-gradient(13deg, rgba(8,107,186,0.8939950980392157) 7%, rgba(2,146,246,0.8911939775910365) 88%);
}
    </style>
</html>
