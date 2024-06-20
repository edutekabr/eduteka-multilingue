<?php

namespace App\Http\Controllers;

use App\Models\Technologie;

class HomeController extends Controller
{
    public function index()
    {
        $frontEnd = Technologie::where('type', Technologie::FRONTEND)->get();
        $backEnd = Technologie::where('type', Technologie::BACKEND)->get();

        return view('home', [
            'frontend' => $frontEnd,
            'backend' => $backEnd
        ]);
    }
}
