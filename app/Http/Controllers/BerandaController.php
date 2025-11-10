<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Fortify\Features;

class BerandaController extends Controller
{
    function index(): View
    {
        $canRegister = Features::enabled(Features::registration());
        return view('front-end.index', compact('canRegister'));
    }
}
