<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function dashboard()
    {
        $skills = Skill::where('user_id', Auth::id())->pluck('name', 'id');
        return view('home.dashboard', compact('skills'));
    }


    public function showCalendar()
    {
        $year = 2024;
        $month = 12;
        $startOfMonth = Carbon::create($year, $month, 1);
        $endOfMonth = $startOfMonth->copy()->endOfMonth();

        $dates = collect(); // コレクションを初期化
        $current = $startOfMonth->copy();

        while ($current->lte($endOfMonth)) {
            $dates[] = $current->copy();
            $current->addDay();
        }

        return view('home.calendar', [
            'dates' => $dates,
            'month' => $startOfMonth->format('F'),
            'year' => $startOfMonth->year,
        ]);
    }
}
