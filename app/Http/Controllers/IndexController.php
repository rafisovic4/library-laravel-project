<?php

namespace App\Http\Controllers;

use App\Models\CategoryBook;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view ('index');
    }

    public function user(User $user)
    {
        if($user === null) {
            return redirect()->route('home');
        }
    }

    public function register()
    {
        return view('registration');
    }

    public function auth()
    {
        return view('auth');
    }

    public function add()
    {
        $categories = CategoryBook::all();
        return view('add', [
            'categories' => $categories
        ]);
    }





}
