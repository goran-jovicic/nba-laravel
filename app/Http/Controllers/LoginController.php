<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        if(!auth()
           ->attempt(
           request(['email', 'password']))) {
           return back()->withErrors([
                'message' => 'Bad credentials. Please try again'
           ]);
        }

        session()->flash('message', 'Uspesno ste se ulogovali');

        return redirect('/teams');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
