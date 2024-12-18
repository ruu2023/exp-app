@extends('layouts.app')

@section('title', 'カレンダー')

@section('content')
  <h2 class="text-3xl">カレンダー</h2>
  <div class="">
    <h2>{{ $month }} {{ $year }}</h2>
    <table class="border border-collapse border-slate-500">
      <thead>
        <tr>
          <th class="border border-slate-500">Sun</th>
          <th class="border border-slate-500">Mon</th>
          <th class="border border-slate-500">Tue</th>
          <th class="border border-slate-500">Wed</th>
          <th class="border border-slate-500">Thu</th>
          <th class="border border-slate-500">Fri</th>
          <th class="border border-slate-500">Sat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($dates->chunk(7) as $week)
          <tr>
            @foreach ($week as $date)
              <td class="border border-slate-500">
                {{ $date->day }}
                @if ($expCalendars->has($date->format('Y-m-d')))
                  <div class="text-xs text-gray-500">
                    @foreach ($expCalendars->get($date->format('Y-m-d')) as $item)
                      <div>
                        {{ $item->skill->name }}: {{ $item->exp }}
                      </div>
                    @endforeach
                  </div>
                @endif
              </td>
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
@endsection
