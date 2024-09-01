// resources/views/user.blade.php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome User</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
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

    <main class="main-content">
        <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
            <div class="text-center">
                <h1 class="text-4xl font-semibold text-black dark:text-white">Welcome, {{ $username }}!</h1>
                
                <a href="{{ url('resources/views/gallery.blade.php') }}">
                    <button class="mt-6 px-6 py-2 bg-[#FF2D20] text-white rounded-md hover:bg-black hover:text-white transition duration-300">Explore Now</button>
                </a>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Jet's Gaming Hub. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
