<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        Post::create([
            'content' => 'test',
            'likes' => 16, 
        ]);

        $users = [
            [
                "name" => "Fero"
            ],
            [
                "name" => "Robo"
            ],
            [
                "name" => "Arpád"
            ]
        ];

        return view('dashboard', 
        ["users" => $users, 
        "posts" => Post::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
