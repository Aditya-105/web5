<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Modul5Controller extends Controller
{
    public function index(){
        $title = "Modul 5";

        return.view('index', compact('title'));
    }
}
