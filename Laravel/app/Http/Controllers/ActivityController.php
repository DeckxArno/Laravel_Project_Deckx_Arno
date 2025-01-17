<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all(); // Haal alle activiteiten op uit de database
        return view('dashboard', compact('activities'));
    }


}

