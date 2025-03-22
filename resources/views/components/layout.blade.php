<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ChiChi</title>
  </head>
  <body class="bg-[linear-gradient(90deg,_rgba(2,0,36,1)_0%,_rgba(13,13,61,1)_45%,_rgba(39,106,120,1)_100%)] text-white min-h-screen">
    <div class="container mx-auto px-4 pt-8">
      <nav class="mb-10 flex items-center justify-between">
      <h4 class="my-0 font-bold md:mr-auto font-normal">
        <a href="/" class="text-white font-bold text-2xl">ChiChi</a>
      </h4>
      @auth
        <div class="flex flex-row items-center my-3 md:my-0">
            <a href="#" class="text-white mr-2" title="Search" data-tooltip="tooltip" data-placement="bottom">
                <i class="fas fa-search"></i>
            </a>
            <span class="text-white mr-2" title="Chat" data-tooltip="tooltip" data-placement="bottom">
                <i class="fas fa-comment"></i>
            </span>
            <a href="/profile/{{ Auth::user()->username }}" class="mr-2">
                <img title="My Profile" data-tooltip="tooltip" data-placement="bottom"
                    class="w-8 h-8 rounded-full"
                    src="https://i.pinimg.com/originals/3d/e0/c5/3de0c5f56ff0edc1aeed8a83d8b7e148.jpg" alt="{{ Auth::user()->username }}" />
            </a>
            <a class="px-4 py-1 text-sm bg-[#4ECDC4] text-white rounded-full hover:bg-[#45b8b0] transition duration-300 shadow-[0_4px_15px_rgba(78,205,196,0.2)] hover:transform hover:-translate-y-[2px] hover:shadow-[0_6px_20px_rgba(78,205,196,0.3)]" href="/create-post">
                Create Post
            </a>
            <form action="/logout" method="POST" class="inline ml-2">
                @csrf
                <button class="px-4 py-1 text-sm bg-[#6c757d] text-white rounded-full hover:bg-[#5c636a] transition duration-300 shadow-[0_4px_15px_rgba(108,117,125,0.2)] hover:transform hover:-translate-y-[2px] hover:shadow-[0_6px_20px_rgba(108,117,125,0.3)]">
                    Sign Out
                  </button>
            </form>
        </div>
      @else
        <form action="/login" method="POST" class="flex items-center mb-0">
            @csrf
            <div class="flex flex-col md:flex-row items-center gap-3">
                <div class="flex-1">
                    <input name="loginusername"
                        class="w-full px-3 py-1 text-sm bg-gray-800 text-white border border-gray-600 rounded focus:ring focus:ring-gray-500"
                        type="text" placeholder="Username" autocomplete="off" />
                </div>
                <div class="flex-1">
                    <input name="loginpassword"
                        class="w-full px-3 py-1 text-sm bg-gray-800 text-white border border-gray-600 rounded focus:ring focus:ring-gray-500"
                        type="password" placeholder="Password" />
                </div>
                <div class="flex-auto">
                    <button class="rounded-full bg-white text-black px-4 py-1 border border-white hover:bg-gray-500 hover:border-gray-500 hover:text-white transition duration-300">
                        Sign In
                    </button>
                </div>
            </div>
        </form>
      @endauth

      </nav>

      {{ $slot }}

    </div>
  </body>
</html>
