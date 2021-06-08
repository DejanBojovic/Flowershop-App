<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    // daje pristup samo neulogovanim korisnicima
    public function __construct() {
        $this->middleware(['guest']);
    }

    public function index() {
        return view('pages.login');
    }

    public function loginUser(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if(!auth()->attempt($request->only('username', 'password'))) {
            return back()->with('loginErr', 'Login unsuccessful');
        }

        return redirect()->route('user');
    }
}
