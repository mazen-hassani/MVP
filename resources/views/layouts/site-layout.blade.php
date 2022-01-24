<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Plotti Botti</title>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="">
    {{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="block w-100 bg-white shadow z-50">

            <!-- header -->
            <div class="max-w-6xl mx-auto py-4  text-gray-600 text-sm  flex justify-between">
                <div class="px-6">App name</div>
                <div class="px-6 flex flex-row justify-center gap-x-6">
                    <a href="" class="hover:underline decoration-pink-500 decoration-2">Menu item 1</a>
                    <a href="" class="hover:underline decoration-pink-500 decoration-2">Menu item 2</a>
                    <a href="" class="hover:underline decoration-pink-500 decoration-2">Menu item 3</a>
                </div>
                <div class="px-6">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}" class="hover:underline">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="hover:underline decoration-pink-500 decoration-2">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 hover:underline decoration-pink-500 decoration-2">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </div>
        </div>

        {{$slot}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
