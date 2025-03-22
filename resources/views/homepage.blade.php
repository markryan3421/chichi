@extends('components.layout')

@section('content')
<div class="container mx-auto px-4">
    <!-- Content Section -->
    <div class="text-center">
      <h2 class="text-3xl font-semibold">
        Hello <span class="font-bold">username</span>, your feed is empty.
      </h2>
      <p class="mt-4 text-lg text-gray-300 max-w-2xl mx-auto">
        Your feed displays the latest posts from the people you follow. If you don’t have any friends to follow, that’s okay; you can use the "Search" feature in the top menu bar to find content written by people with similar interests and then follow them.
      </p>

      <footer class="mt-10 text-sm text-gray-400">
        Copyright © 2022 <span class="text-teal-300">OurApp</span>. All rights reserved.
      </footer>
    </div>
  </div>
@endsection