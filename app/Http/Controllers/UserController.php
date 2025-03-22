<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    private function getSharedData($user) {

        View::share('sharedData', ['username' => $user->username, 'numOfPost' => $user->posts()->count()]);
        // 'sharedData' variable will be the reference to be use in frontend to display dynamic values from database. this will be called inside the template tag
    }

    public function showProfile(User $user)
    {
        $this->getSharedData($user);
        return view('profile-posts', ['posts' => $user->posts()->latest()->get()]); // 'posts()' method from User Model
    }

    public function index()
    {
        //
        if(Auth::check()) {
            return view('homepage');
        } else {
            return view('welcome');
        }
    }

    public function logout() {
        Auth::logout(); // log the user out
        return redirect('/')->with(['success' => 'You are now logged out!']);
    }

    public function login(Request $request) {
        $incomingFields = $request->validate([
            'loginusername' => 'required',
            'loginpassword' => 'required',
        ]);

        // Check if user exists
        if(Auth::attempt(['username' => $incomingFields['loginusername'], 'password' => $incomingFields['loginpassword']])) {
            // Store cookies
            $request->session()->regenerate();

            // Redirect back to homepage
            return redirect('/')->with(['success' => 'You are now logged in!']);
        } else {
            return redirect('/')->with(['failure' => 'Invalid credentials']);
        }
    }

    public function register(Request $request)
    {
        //
        $incomingFields = $request->validate([
           'username' => ['required', 'min:3', 'max:15', Rule::unique('users', 'username')], // 'Rule' is used to make the value for that column unique
           'email' => ['required' , 'email', Rule::unique('users', 'email')],
           'password' => ['required', 'min:8', 'max:15', 'confirmed'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);

        // Store
        $user = User::create($incomingFields);

        // Login the user automatically after creating the account
        Auth::login($user);
        return redirect('/homepage')->with(['success', 'You are now registered!']);
    }

    
}
