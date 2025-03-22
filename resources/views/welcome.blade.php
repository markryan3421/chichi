<x-layout>
  <style>
    .bubble-container {
      position: relative;
      min-height: 300px;
      overflow: hidden;
    }
  
    .bubble {
      position: absolute;
      background: linear-gradient(
        to right,
        rgba(255, 255, 255, 0.4),
        rgba(173, 216, 230, 0.6)
      );
      border-radius: 50%;
      box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
      animation: float 7s ease-in infinite;
    }
  
    @keyframes float {
      0% {
        bottom: -20px;
        opacity: 0;
      }
      20% {
        opacity: 0.8;
      }
      40% {
        opacity: 0.6;
      }
      80% {
        opacity: 0.3;
      }
      100% {
        bottom: 100%;
        opacity: 0;
      }
    }
  
    .bubble-1 {
      width: 20px;
      height: 20px;
      left: 10%;
      animation-delay: 0s;
    }
  
    .bubble-2 {
      width: 15px;
      height: 15px;
      left: 25%;
      animation-delay: 2s;
    }
  
    .bubble-3 {
      width: 25px;
      height: 25px;
      left: 40%;
      animation-delay: 4s;
    }
  
    .bubble-4 {
      width: 12px;
      height: 12px;
      left: 60%;
      animation-delay: 1s;
    }
  
    .bubble-5 {
      width: 18px;
      height: 18px;
      left: 75%;
      animation-delay: 3s;
    }
  
    .bubble-6 {
      width: 14px;
      height: 14px;
      left: 90%;
      animation-delay: 2.5s;
    }
  
    .bubble-7 {
      width: 16px;
      height: 16px;
      left: 15%;
      animation-delay: 5s;
    }
  
    .bubble-8 {
      width: 22px;
      height: 22px;
      left: 85%;
      animation-delay: 1.5s;
    }
  </style>
  
  <div class="flex flex-col items-center justify-center min-h-[80vh] lg:flex-row lg:space-x-12 px-4">
      <!-- Left Side Content -->
      <div class="max-w-xl bubble-container">
        <div class="bubble bubble-1"></div>
        <div class="bubble bubble-2"></div>
        <div class="bubble bubble-3"></div>
        <div class="bubble bubble-4"></div>
        <div class="bubble bubble-5"></div>
        <div class="bubble bubble-6"></div>
        <div class="bubble bubble-7"></div>
        <div class="bubble bubble-8"></div>
        
        <h2 class="text-5xl leading-tight font-light relative z-10">Remember <span class="font-semibold">Writing?</span></h2>
        <p class="mt-4 text-lg text-gray-300 relative z-10">Are you sick of short tweets and impersonal "shared" posts that are reminiscent of the late 90's email forwards? We believe getting back to actually writing is the key to enjoying the internet again.</p>
      </div>
  
      <!-- Right Side Form -->
      <div class="mt-8 w-full max-w-md rounded-lg bg-white p-8 shadow-lg lg:mt-0">
        <form action="/register" method="POST" class="space-y-4">
          @csrf
          <div>
            <label class="font-medium text-gray-700">Username</label>
            <input name="username" type="text" placeholder="Pick a username" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-900" />
          </div>
          <div>
            <label class="font-medium text-gray-700">Email</label>
            <input name="email" type="email" placeholder="you@example.com" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-900" />
          </div>
          <div>
            <label class="font-medium text-gray-700">Password</label>
            <input name="password" type="password" placeholder="Create a password" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-900" />
          </div>
          <div>
            <label class="font-medium text-gray-700">Confirm Password</label>
            <input name="password_confirmation" type="password" placeholder="Confirm password" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none text-gray-900" />
          </div>
          <button type="submit" class="mt-4 w-full rounded-full bg-teal-400 py-2 font-semibold text-white transition duration-300 hover:bg-teal-500">Sign up for OurApp</button>
        </form>
      </div>
  </div>
</x-layout>