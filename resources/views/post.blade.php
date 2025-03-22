<x-layout>
  <div class="font-sans min-h-screen flex flex-col m-0 p-0 overflow-x-hidden body:m-0 body:p-0">
      <div class="py-0 mb-3 w-full">
          <div class="container mx-auto flex flex-col md:flex-row items-center px-6">
              <h4 class="text-white text-lg font-bold mr-auto"><a href="/">OurApp</a></h4>
              <div class="flex items-center space-x-4">
                  <a href="#" class="text-white" title="Search"><i class="fas fa-search"></i></a>
                  <span class="text-white" title="Chat"><i class="fas fa-comment"></i></span>
                  <a href="#"><img title="My Profile" class="w-8 h-8 rounded-full" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
                  <a class="px-3 py-1 text-sm bg-white text-black rounded-full border border-white transition duration-300 hover:bg-gray-400 hover:border-gray-400" href="#">Create Post</a>
                  <form action="#" method="POST" class="inline">
                      <button class="px-3 py-1 text-sm bg-teal-400 text-white rounded-full border border-teal-500 transition duration-300 shadow-md hover:bg-teal-500 hover:border-teal-600 transform hover:-translate-y-0.5 hover:shadow-lg">Sign Out</button>
                  </form>
              </div>
          </div>
      </div>

      <div class="container mt-8 mx-auto px-6 py-9 max-w-3xl rounded-lg bg-white bg-opacity-10 text-white transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-[0_4px_10px_2px_rgba(0,0,0,0.15)] hover:bg-opacity-20">
  <div class="flex justify-between items-center">
      <h2 class="pl-2 text-2xl font-bold text-white">Example Post Title Here</h2>
      <span class="flex items-center space-x-2">
          <a href="#" class="text-blue-300" title="Edit"><i class="fas fa-edit"></i></a>
          <form action="#" method="POST" class="inline">
              <button class="text-red-300" title="Delete"><i class="fas fa-trash"></i></button>
          </form>
      </span>
  </div>

  <p class="text-gray-300 text-xs mt-2 pl-3 flex items-center">
      <a href="#"><img class="w-6 h-6 rounded-full mr-2" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
      Posted by <a href="#" class="text-blue-300">kittydoe</a> on 2/3/2019
  </p>

  <div class="mt-6 pl-5 space-y-4 text-gray-300">
      <p>My roommate yells at me when I destroy things, but I do what I want.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
  </div>
</div>

      <footer class="text-center text-white text-sm py-4 mt-auto w-full">
          <p>Copyright &copy; 2022 <a href="/" class="text-blue-300 hover:text-blue-400">OurApp</a>. All rights reserved.</p>
      </footer>
  </div>
</x-layout>