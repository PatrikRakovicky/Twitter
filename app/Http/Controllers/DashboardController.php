<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
            [
                "name" => "Fero"
            ],
            [
                "name" => "Robo"
            ],
            [
                "name" => "Jano"
            ]
        ];

        return view('dashboard', 
        ["users" => $users, 
        "posts" => Post::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
