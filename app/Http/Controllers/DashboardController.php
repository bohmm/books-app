<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $breadcrumbs = [
            'Home' => null,
        ];

        return view('dashboard', compact('breadcrumbs'));
    }
}
