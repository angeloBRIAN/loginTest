<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guestList;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GuestDataController extends Controller
{
    public function welcome()
    {
        return view('welcome', [
            "title" => "welcome"
        ]);
    }

    public function user_home()
    {
        $user = auth()->user();
        if ($user->is_admin == 1) 
        {
            $user_data = User::where('is_admin', false)->get();
        }
        else 
        {
            $user_data = collect();
        }
        //$user_data = User::all();
        return view('home', [
            "title" => "home",
            "name" => $user->name,
        ], compact("user_data"));
    }


    public function login()
    {
        return view('login/login', [
            'title'=> 'login',
        ]);
    }

    public function register()
    {
        return view('login/register', [
            'title'=> 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
        ]);
        $validated['password'] = bcrypt($validated['password']);
        //dd('Registrasi Berhasil!');
        User::create($validated);
        return redirect('/login')->with('success','Registration successfull!');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->with('error','Login Failed!');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
