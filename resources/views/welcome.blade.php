<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery of Games</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <header class="bg-gray-800 text-white fixed w-full z-50">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Jet's Gaming Hub</h1>
            <ul class="flex space-x-6">
                <li><a href="{{ url('/') }}" class="hover:text-gray-400">Homepage</a></li>
                <li><a href="{{ url('resources/views/gallery.blade.php') }}" class="hover:text-gray-400">Gallery</a></li>
                <li><a href="{{ url('resources/views/review.blade.php') }}" class="hover:text-gray-400">Reviews</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-black dark:text-white">Welcome to Jet's Gaming Hub</h1>
                <p class="text-xl mt-4 text-black dark:text-white/70">Your destination for gaming reviews, and more!</p>
                <a href="{{ url('resources/views/gallery.blade.php') }}">
                    <button class="mt-6 px-6 py-2 bg-[#FF2D20] text-white rounded-md hover:bg-black hover:text-white transition duration-300">Explore Now</button>
                </a>
            </div>
        </div>
    </main>
</body>
</html>
