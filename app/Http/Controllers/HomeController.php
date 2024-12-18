<?php

namespace App\Http\Controllers;

use App\Models\ExpCalendar;
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

    // 月の初日が日曜日でない場合、前の週の日曜日まで遡る
    $startOfWeek = $startOfMonth->copy()->startOfWeek(Carbon::SUNDAY);

    // 月の末日が土曜日でない場合、次の週の土曜日まで補完する
    $endOfWeek = $endOfMonth->copy()->endOfWeek(Carbon::SATURDAY);

    $dates = collect(); // コレクションを初期化
    $current = $startOfWeek->copy();

    while ($current->lte($endOfWeek)) {
      $dates[] = $current->copy();
      $current->addDay();
    }

    // Eloquentでデータを取得
    $expCalendars = ExpCalendar::with('skill')
      ->whereBetween('created_at', [$startOfWeek, $endOfWeek])
      ->get()
      ->groupBy(function ($item) {
        return $item->created_at->format('Y-m-d'); // 日付でグループ化
      });

    return view('home.calendar', [
      'dates' => $dates,
      'month' => $startOfMonth->format('F'),
      'year' => $startOfMonth->year,
      'expCalendars' => $expCalendars,
    ]);
  }
}
