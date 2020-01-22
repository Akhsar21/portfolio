<?php

namespace App\Http\Controllers;

use App\Actions\Posts\LatestPostAction;

class HomeController extends Controller
{
    public function index(LatestPostAction $latestPostAction)
    {
        $posts = $latestPostAction->run();
        return view('home', compact('posts'));
    }

    public function dashboard()
    {
        return view('admin.home');
    }
}
