@extends('components.layout')

@section('content')
<div class="flex flex-col items-center justify-between lg:flex-row">
    <!-- Left Side Content -->
    <div class="max-w-xl">
      <h2 class="text-5xl leading-tight font-light">Remember <span class="font-semibold">Writing?</span></h2>
      <p class="mt-4 text-lg text-gray-300">Are you sick of short tweets and impersonal "shared" posts that are reminiscent of the late 90’s email forwards? We believe getting back to actually writing is the key to enjoying the internet again.</p>
    </div>

    <!-- Right Side Form -->
    <div class="mt-8 w-full max-w-md rounded-lg bg-white p-8 shadow-lg lg:mt-0">
      <form action="/register" method="POST" id="registration-form">
        @csrf
        <div class="space-y-4">
          <div>
            <label class="font-medium text-gray-700">Username</label>
            <input type="text" value="{{old('username')}}" name="username" placeholder="Pick a username" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            @error('username')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div>


          <div>
            <label class="font-medium text-gray-700">Email</label>
            <input type="email" value="{{old('email')}}" name="email" placeholder="you@example.com" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            @error('email')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div>

          <div>
            <label class="font-medium text-gray-700">Password</label>
            <input type="password" name="password" placeholder="Create a password" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            @error('password')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div>

          <div>
            <label class="font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" placeholder="Confirm password" class="mt-1 w-full rounded-md border px-4 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none" />
            @error('password_confirmation')
              <p class="m-0 small alert alert-danger shadow-sm">{{$message}}</p>
            @enderror
          </div>

          <button type="submit" class="mt-4 w-full rounded-full bg-teal-400 py-2 font-semibold text-white transition duration-300 hover:bg-teal-500">Sign up for OurApp</button>
        </div>
      </form>

        
    </div>
  </div> 
@endsection
