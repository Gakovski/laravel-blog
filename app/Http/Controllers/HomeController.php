<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        
        $posts = Post::latest()->take(3)->get();

        return view('home', ['posts' => $posts]);
    }
    
    public function all() {

        $posts = Post::all(); 

        return view('all', ['posts' => $posts]);
    }
}
