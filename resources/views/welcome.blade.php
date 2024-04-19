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
            <link rel="stylesheet" href="{{asset('/css/header.css')}}">

    </head>
    <body class="antialiased">
        
           

            @include('header')

            @if(isset($_POST['submit']) && isset($response))
   

            <section class="containerData">

                <div id="data" class="data">

                    <h1 id="categorieValue">Categorie: "{{$search}}"</h1>

                    @foreach($response as $data) 

             

                    @endforeach

     
                    <h1 class="dataValue" id="dataValue">{{$data}}</h1>
               
                    @endif

                    @if(isset($data)  && $data == "/jokes/random")

                    <h1 class="errorStyle" style="text-align: center">ERROR</h1>

                    <script>

                        document.getElementById('categorieValue').style.display = "none"
                        document.getElementById('dataValue').style.display = "none"
                        document.getElementById('data').style.border = "2px solid transparent"


                    </script>

                    @endif

                    

                </div>

            

            </section>
     

      
    
          

    </body>
    @include('footer')
</html>
