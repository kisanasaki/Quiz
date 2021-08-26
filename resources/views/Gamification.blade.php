@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="{{ url('Gamification') }}">アカウント情報</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ゲーミフィケーション</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Name</h5>
  </div>

  <div class="card-footer text-center">
    <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
  </div>

</div>

@endsection
