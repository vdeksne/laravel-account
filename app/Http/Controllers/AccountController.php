<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display my account page
     *
     * @return Response
     */
    public function index(): Response
    {
        return response()->view('page.account');
    }

    /**
     * Login user in to the system
     *
     * @param Request $request
     */
    public function login(Request $request)
    {
        // implement login functionality
        // dd($request->all());

        return redirect('/success');
    }

    public function loginPost(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login successful, redirect to the success page
            return redirect()->route('success');
        }

        // Login failed, redirect to the homepage with an error message
        return redirect()->route('index')->with('error', 'Invalid credentials. Please try again.');
    }

    /**
     * Logout user from the system
     *
     */
    public function logout()
    {
        // implement logout functionality

        return redirect('/');
    }

    /**
     * Register user in the system
     *
     * @param Request $request
     */
    public function register(Request $request)
    {
        // implement register functionality
        // dd($request->all());
        return redirect('/success');
    }
    function registerPost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/[a-zA-Z]/', // must contain letters
                'regex:/[0-9]/',     // must contain numbers
                'confirmed',         // confirm_password must match
            ],
            'subscribed' => 'nullable|boolean',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->subscribed = $request->subscribed ?? 0;
        $user->email_verified_at = now(); // Set email verification date to now
        $user->remember_token = \Illuminate\Support\Str::random(10);
        $user->created_at = now(); // Set created_at date to now
        if ($user->save()) {

            return redirect('/')->with('success', 'Registration successful! Please log in.');
        }
        return redirect('/')->with('error', 'Registration failed. Please try again.');
    }

    /**
     * Display a success message for logged-in users
     *
     */
    public function success()
    {
        $user = auth()->user(); // Get the authenticated user

        return view('page.success', [
            'first_name' => $user->first_name ?? '',
            'last_name' => $user->last_name ?? ''
        ]);
    }
}
