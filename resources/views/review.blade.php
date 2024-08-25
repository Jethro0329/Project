<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                As a fan of gaming, I think that it would be difficult to have not heard of the Grand Theft Auto Series. 
                                The franchise has many games under it's belt, and while controversial, it still remains the modern go to game for the majority of the gaming community. 
                                The latest in the franchise, Grand Theft Auto V, is Rockstar Games love letter to all the fans of the franchise. 
                                The game is groundbreaking in its innovation and was ahead of its time. 
                                Due to this, the game had an immense popularity leading up to and on its release day. 
                                Does it live up to the hype? Lets find out.
                            </p>
                            <p class="mt-2">
                                Personally, I am a huge fan of open-world games and GTA V did not disappoint. 
                                The game is very amazing graphically and gameplay wise. 
                                The game has many things for the player to do which makes its replay value higher. 
                                Add to that the amazing story and cast of characters just makes the game rich in development.  
                            </p>
                        </div>
                    </div>
                    
                    <div class="game-item flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                        <img src="{{ asset('img/valo.jpg') }}" alt="Valorant" class="game-img w-full md:w-1/3">
                        <div>
                            <h2 class="text-2xl font-semibold">Valorant</h2>
                            <p class="mt-2">
                            I am a huge fan of first-person shooter games, dating back all the way to the Left 4 Dead and even Half-Life games. 
                            Valorant was a breath of fresh air for me because of its unique gameplay. 
                            Unlike its counterparts like Counter Strike and Call of Duty, Valorant has unique abilities and agents. 
                            It is similar to Overwatch but more tactical shooter an less power dominated games. 
                            Valorant is fun and challenging for new players and veterans of the game. 
                            There is much to learn about the system but once you do I can guarantee that you are gonna enjoy the game. 
                            The game is more enjoyable with friends so that the fun can be limitless. 
                            The bad sides of this game are present, like cheaters, toxic players and more but that doesn't outweigh all the good that is does.
                            </p>
                        </div>
                    </div>

                    <div class="game-item flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8">
                        <img src="{{ asset('img/re4.jpg') }}" alt="Resident Evil 4" class="game-img w-full md:w-1/3">
                        <div>
                            <h2 class="text-2xl font-semibold">Resident Evil 4</h2>
                            <p class="mt-2">
                            The resident evil games have become one of my favorite game series lately. 
                            Although, I have only played the remake versions of these games. 
                            The one game where I played both original and remake though is Resident Evil 4 and I must say that the original game might be considered a masterpiece. 
                            The game is very enjoyable and its story is very good. 
                            The cast of characters also add depth to this game as to not make it generic. 
                            The lead character Leon S. Kennedy has charm and a cool personality so scenes with him are never boring. 
                            The set pieces in this game are fantastic from a village, castle and a island you will always be amazed at the environment of this game. 
                            That says a lot considering this game came out so long ago. 
                            Overall, this game takes my excitement and keeps going until the end where you can appreciate the game even more.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>