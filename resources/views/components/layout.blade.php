<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ChiChi</title>
  </head>
  <body class="flex h-screen items-center justify-center bg-gradient-to-r from-blue-900 to-teal-800 text-white">
    <div class="container mx-auto px-4">
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
            <a class="px-3 py-1 text-white bg-green-500 hover:bg-green-600 text-sm rounded mr-2" href="/create-post">
                Create Post
            </a>
            <form action="/logout" method="POST" class="inline">
                @csrf
                <button class="px-3 py-1 bg-gray-500 hover:bg-gray-600 text-white text-sm rounded">
                    Sign Out
                </button>
            </form>
        </div>
      @else
          <form action="/login" method="POST" class="mb-0 pt-2 md:pt-0">
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
                      <button class="px-3 py-1 text-white bg-blue-500 hover:bg-blue-600 text-sm rounded">
                          Sign In
                      </button>
                  </div>
              </div>
          </form>
      @endauth

      </nav>

      @yield('content')

    </div>
  </body>
</html>
