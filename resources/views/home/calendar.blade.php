@extends('layouts.app')

@section('title', 'カレンダー')

@section('content')
  <h2 class="text-3xl text-red-500">カレンダー</h2>
  <div class="">
    <h2>{{ $month }} {{ $year }}</h2>
    <table class="">
      <thead>
        <tr>
          <th class="border-slate-400">Sun</th>
          <th>Mon</th>
          <th>Tue</th>
          <th>Wed</th>
          <th>Thu</th>
          <th>Fri</th>
          <th>Sat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dates->chunk(7) as $week)
          <tr>
            @foreach ($week as $date)
              <td>{{ $date->day }}</td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
@endsection
