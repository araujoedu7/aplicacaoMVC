<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'bleach',
            'last',
            'Grey\'s Anatomy'
        ];

        return view('listar-series', compact('series'));
    }
}
