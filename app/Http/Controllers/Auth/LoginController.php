<?php
namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{
    public function show_login_form()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
       $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home.index')->with('success', 'You are logged in successfully.');
        }else{ 
            return redirect()->back()->withErrors([
                'email' => 'Email or password is incorrect.',
            ]);
        }
    }


}