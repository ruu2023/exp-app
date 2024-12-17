@extends('layouts.app')

@section('title', 'ダッシュボード')

@section('content')
  <h2 class="text-center mb-4">ダッシュボード</h2>
  <p class="text-center">ログイン中: {{ Auth::user()->name }}</p>
  <div>
    <h3>Add for calendar</h3>
    <form action="{{ route('calendar.store') }}" method="post">
      @csrf
      <div class="form-group">
        <label for="skill_id">skill_id</label>
        <select class="form-control" id="skill_id" name="skill_id">
          <option value="">選択してください</option>
          @foreach ($skills as $index => $name)
            <option value="{{ $index }}">{{ $name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exp">exp</label>
        <input type="text" class="form-control" id="exp" name="exp" required>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">add exp</button>
    </form>
    @if ($errors->any())
      <div class="text-red-500">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
  <div>
    カレンダー
  </div>
  <div class="d-flex justify-content-center">
    <a href="{{ route('home') }}" class="btn btn-outline-secondary mx-2">トップページに戻る</a>
  </div>
  <form class="text-center mt-4" action="{{ route('logout') }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-danger mx-2">ログアウト</button>
  </form>
@endsection
