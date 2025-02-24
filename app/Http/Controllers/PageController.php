<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('pages/home');
    }

    public function skills() {
        return view('pages/skills');
    }

    public function gallery() {
        return view('pages/gallery');
    }
}
