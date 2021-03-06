<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel Ecommerce Project</title>
        @include('partials.styles')
        
    </head>
    <body>

        <div class="wrapper">
            
            @include('partials.nav')
            @yield('content')
            
            <footer class="footer-bottom">
                <p class="text-center">&copy; 2020 All rights reserved | Ecommerce Site</p>
            </footer>

        </div>
        

        @include('partials.script')
        
    </body>
</html>