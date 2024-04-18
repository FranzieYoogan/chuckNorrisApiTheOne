<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

 

            <link rel="stylesheet" href="{{asset('/css/homeStyle.css')}}">


    </head>
    <body class="antialiased">
        
           

            @include('header')

            @if(isset($_POST['submit']))
   

            <section class="containerData">

                <div class="data">

                    <h1>Categorie: "{{$search}}"</h1>
                    <h1>{{$data}}</h1>

                </div>

            

            </section>
     

      

            @endif
    </body>
</html>
