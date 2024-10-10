<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
            [
                "name" => "Fero",
            ],
            [
                "name" => "Janko",
            ],
            [
                "name" => "Jozo",
            ]
        ];

        return view('dashboard', ["users" => $users,] );
    }
}
