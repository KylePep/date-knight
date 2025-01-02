<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DatesController extends Controller
{
    public function create()
    {

        return Inertia::render('Dates/Create');
    }
    public function show()
    {

        return Inertia::render('Dates/Show');
    }
}
