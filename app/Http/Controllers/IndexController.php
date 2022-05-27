<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
       $posts = Post::orderBy("created_at", "DESC")->limit(3)->get();
            return view('index',[
                "posts" => $posts,
            ]);

    }
}
