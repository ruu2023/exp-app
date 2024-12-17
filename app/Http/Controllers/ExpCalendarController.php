<?php

namespace App\Http\Controllers;

use App\Models\ExpCalendar;
use Illuminate\Http\Request;

class ExpCalendarController extends Controller
{
    public function index(Request $request) {}

    public function store(Request $request)
    {
        $request->validate([
            'skill_id' => 'required',
            'exp' => 'required|max:8'
        ]);
        ExpCalendar::create([
            'skill_id' => $request->input('skill_id'),
            'exp' => $request->input('exp'),
            'created_at' => now(),
        ]);
        return redirect()->route('dashboard')
            ->with('success', 'Post created successfully.');
    }
}
