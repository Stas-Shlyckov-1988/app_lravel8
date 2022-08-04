<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Публикации</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body id="fon">
  
        <div id="app" style="min-height: 55em;">
            <publication-component/>
            
        </div>
        
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="/js/three.r119.min.js"></script>
        <script src="/js/vanta.waves.min.js"></script>
        <script>
        VANTA.WAVES({
            el: "#fon",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00
        })
        </script>
    </body>
</html>
