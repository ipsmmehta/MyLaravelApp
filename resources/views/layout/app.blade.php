<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name','LaliKaApp') }}</title>
    <link rel="Stylesheet" href="{{asset('css/app.css')}}" >

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

         <body style="background-color:white;">
              
                    @include('layout.navbar3')
                 <!-- <div class="container-flude"> -->
                     
                <div class="container">    
                     @yield('SlideBar')
                    
                        <div class="row" style="width:100%;">
                                <div class="col-3" style="//border:0.01em solid blue">
                                    @yield('leftSideBar')
                                </div>
                                <div class="col-9">
                                        @yield('content')
                                </div>
                        </div>
                  @yield('content2')      
                </div>
                

         
    </body>
<script src="{{ asset('js/app.js') }}"></script>
</html>
