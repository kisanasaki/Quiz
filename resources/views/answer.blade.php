

@extends('layouts.app')

@section('content')

<div class="container">
  <div class="card mb-4">
    <div class="card-header">
       {{$answers}}
    </div>
    <div class="card-body">
      <div>解説</div><br>
      {{$commentary}}
    </div>
    <div class="card-footer">

  </div>
  <div class="card-footer text-center">
    <a href="{{ route('question',[$ps,$id+1]) }}"　class="col-4 mt-3 btn btn-primary">次の問題へ</a>
  </div>
</div>




@endsection
