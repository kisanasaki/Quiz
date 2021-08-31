@extends('layouts.app')

@section('content')
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="{{ url('Gamification') }}">アカウント情報</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/chart')}}">グラフ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/ranking')}}">ランキング</a>
      </li>
    </ul>
  </div>
</div>

  <div class="card-footer text-center">

    1位{{$rank1['name']}} -> {{$rank1['point']}}ポイント<br>
    2位{{$rank2['name']}} -> {{$rank2['point']}}ポイント<br>
    3位{{$rank3['name']}} -> {{$rank3['point']}}ポイント<br>

    <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
  </div>

</div>

@endsection
