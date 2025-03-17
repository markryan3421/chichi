<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>OurApp</title>
  </head>
  <body class="flex h-screen items-center justify-center bg-gradient-to-r from-blue-900 to-teal-800 text-white">
    <div class="container mx-auto px-4">
      <nav class="mb-10 flex items-center justify-between">
        <h1 class="text-2xl font-bold">OurApp</h1>
        <div class="flex items-center space-x-2">
          <input type="text" placeholder="Username" class="rounded-md border border-gray-300 bg-white px-4 py-2 text-gray-800 focus:outline-none" />
          <input type="password" placeholder="Password" class="rounded-md border border-gray-300 bg-white px-4 py-2 text-gray-800 focus:outline-none" />
          <button class="rounded-full bg-white px-4 py-2 font-semibold text-blue-800 shadow-md hover:bg-gray-100">Sign In</button>
        </div>
      </nav>

      @yield('content')

    </div>
  </body>
</html>
