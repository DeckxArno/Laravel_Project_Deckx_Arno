<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        // Haal alle activiteiten op, eventueel met paginering
        $activities = Activity::latest()->paginate(10);

        return view('home', compact('activities'));
    }
}

