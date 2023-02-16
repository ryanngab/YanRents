<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Motor;
use App\Models\Barang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{



    public function detail($id)
    {
        //

        $barang = Barang::where('id', $id)->first();
        $category = Category::all();
        $dashboards = Motor::where('id', $id)->first();

        return view('partials.detail', compact('barang', 'category', 'dashboards'));

    }

    public function landing()
    {
        $user = User::all();
        $barang = Barang::all();
        $category = Category::all();
        $dashboards = Motor::all();

         if (request('search')) {
            $barang->where('name', 'like', '%' . request('search') . '%')
                ->orwhere('harga', 'like', '%' . request('search') . '%');
        }

        return view('welcome', compact('dashboards', 'category', 'barang', 'user'));


    }

    public function indexDash()
    {
        $user = User::count();
        $category = Category::count();
        $dashboards = Motor::count();
        $barang = Barang::count();



        return view('dashboard.indexDash', compact('barang','dashboards', 'category', 'user'));
    }

    public function index()
    {
        return view('login.login', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authanticate(Request $request)
    {

        $login = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($login)) {
            $request->session()->regenerate();

            return redirect()->intended('/dash');
        }

        return back()->with('loginError', 'Login gagal! Silahkan coba lagi');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }

}