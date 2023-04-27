<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Kisah Kasus - Net Detective Indonesia</title>
        <link rel="icon" type="image/x-icon" href="/assets/icon.ico">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title')</title>
        
        <meta name="description" content="@yield('description')"/>
        <meta name="keywords" content="@yield('keywords')"/>
        <meta name="author" content="@yield('author')"/>
        <meta name="robots" content="@yield('robots')"/>
        <meta name="application-name" content="Voozey" />

        <!-- For Facebook -->
        <meta property="og:title" content="@yield('title')" />
        <meta property="og:type" content="video.movie" />
        <meta property="og:image" itemprop="image" content="@yield('image')" />
        <meta property="og:url" content="@yield('url')" />
        <meta property="og:description" content="@yield('description')" />

        <meta property="og:site_name" content="Voozey">
        
        <style>
           
            .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width:100%;
                height: 100%;
                z-index: 9999;
                background-color: #fff; 
              
            }
            .se-pre-con div{
                height:100%;
            }
            .se-pre-con img{
                height:100px;
            }

            .chkcon{
                display: inline-block;
                text-align: left;
            }

        </style>

        <!-- styles -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.3&appId=1255705794497382&autoLogAppEvents=1"></script>
        
        <div class="se-pre-con">
            <div class="d-flex align-items-center justify-content-around"> 
                <img src="/assets/preloader.gif" alt="" srcset="">
            </div>   
        </div>
        <div id="app">
            <div class="">
                @include('client.inc.header')
                @yield('content')
                @yield('footer')
            </div>
            
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
           
    <script src="{{ asset('js/app.js?id=1') }}"></script>

    @yield('extra-scripts')
   
</body>  
</html>
