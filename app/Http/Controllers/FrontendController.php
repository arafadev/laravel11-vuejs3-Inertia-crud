<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return Inertia::render('Frontend/Home');
        // return Inertia::render('Welcome', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        //     'laravelVersion' => Application::VERSION,
        //     'phpVersion' => PHP_VERSION,
        // ]);
    }

    function about()
    {
        return Inertia::render('Frontend/About', ['title' => 'About Us Page']);
    }
}
