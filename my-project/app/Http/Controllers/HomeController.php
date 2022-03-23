<?php

namespace App\Http\Controllers;

use App\Models\Character;

class HomeController
{
    public function index() {
        return view('welcome');
    }
}
