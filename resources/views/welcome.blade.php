<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jet Gaming Hub</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Jet Gaming Hub</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Homepage</a></li>
                <li><a href="{{ url('resources/views/gallery.blade.php') }}">Gallery</a></li>
                <li><a href="{{ url('/content') }}">Content</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-black dark:text-white">Welcome to Jet Gaming Hub</h1>
                <p class="text-xl mt-4 text-black dark:text-white/70">Your ultimate destination for gaming news, reviews, and more!</p>
                <a href="{{ url('resources/views/gallery.blade.php') }}">
                    <button class="mt-6 px-6 py-2 bg-[#FF2D20] text-white rounded-md hover:bg-black hover:text-white transition duration-300">Explore Now</button>
                </a>
            </div>
        </div>
    </main>
</body>
</html>
