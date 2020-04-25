<!DOCTYPE html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/app.css">
        <script src="/js/app.js"></script>
       
    </head>
    <body>
 
        <div id="app" class="d-flex flex-column h-screen justify-content-between">
            <header>
            @include('partials.nav')
            </header>

            <main>
                @yield('content')
            </main>

            <footer class="bg-white text-black-50 text-center py-3" >
            LibreryReservations.com.mx  ! CopyRight @ {{date('Y')}}
        </footer> 

        </div>

        
        
    </body>
</html>