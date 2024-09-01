<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery of Games</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="homepage">
    <header>
        <div class="header-container">
            <h1>Jet's Gaming Hub</h1>
            <nav>
                <a href="{{ url('/') }}">Homepage</a>
                <a href="{{ url('resources/views/gallery.blade.php') }}">Gallery</a>
                <a href="{{ url('resources/views/review.blade.php') }}">Reviews</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-black dark:text-white">Welcome to Jet's Gaming Hub</h1>
                <p class="text-xl mt-4 text-black dark:text-white/70">Your destination for gaming reviews, and more!</p>
                
                <!-- User Input Form -->
                <form action="{{ url('/user') }}" method="GET" class="mt-6">
                    <input type="text" name="username" placeholder="Enter your name" class="px-4 py-2 rounded-md border border-gray-300 text-black" required>
                    <button type="submit" class="px-6 py-2 bg-[#FF2D20] text-white rounded-md hover:bg-black hover:text-white transition duration-300">Submit</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
