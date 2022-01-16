<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page Title | App name</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased bg-gray-50 flex flex-col">

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

<!-- footer area -->
<div class="w-100 bg-gray-800 text-gray-300 py-12">
    <div class="block p-5 max-w-6xl mx-auto z-0 min-h-full flex flex-row justify-between">
        <div>
            A footer contains the site info
        </div>
        <div>
            And some legal mentions
        </div>
        <div>
            And typically some contact info
        </div>

    </div>
</div>
</body>
</html>
