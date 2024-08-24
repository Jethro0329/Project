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
              <li><a href="{{ url('resources/views/content.blade.php') }}" class="hover:text-gray-400">Reviews</a></li>
          </ul>
      </nav>
  </header>

  <main class="pt-20">
        <div class="min-h-screen bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900">
            <div class="container mx-auto px-4 py-8 text-center">
                <h1 class="text-4xl font-semibold dark:text-white">Game Reviews</h1>
                <p class="text-xl mt-4 dark:text-white/70">See my reviews on some great games.</p>
                
                <div class="game-gallery mt-8 space-y-12">
                    <div class="game-item flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                        <img src="{{ asset('img/gtav.jpg') }}" alt="Grand Theft Auto V" class="game-img w-full md:w-1/3">
                        <div>
                            <h2 class="text-2xl font-semibold">Grand Theft Auto V</h2>
                            <p class="mt-2">
                                ......
                            </p>
                        </div>
                    </div>
                    
                    <div class="game-item flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                        <img src="{{ asset('img/valo.jpg') }}" alt="Valorant" class="game-img w-full md:w-1/3">
                        <div>
                            <h2 class="text-2xl font-semibold">Valorant</h2>
                            <p class="mt-2">
                                .....
                            </p>
                        </div>
                    </div>

                    <div class="game-item flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                        <img src="{{ asset('img/re4.jpg') }}" alt="Resident Evil 4" class="game-img w-full md:w-1/3">
                        <div>
                            <h2 class="text-2xl font-semibold">Resident Evil 4</h2>
                            <p class="mt-2">
                                .....
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>