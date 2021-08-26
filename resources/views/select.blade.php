@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="card">
      <div class="card-header">
        レベル
        {{$ps}}
      </div>
      <div class="card-body">
        <div class="col text-center">
          <a href="{{ route('question',['ps'=>$ps,'id'=>'1']) }}" class="col-4 mt-3 btn btn-primary">はじめから</a>
          <a href="{{ route('question',['ps'=>$ps,'id'=>'1']) }}" class="col-4 mt-3 btn btn-primary">つづきから</a>

        </div>

      </div>
      <div class="card-footer text-center">
        <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
      </div>
    </div>

  </div>
</div>

@endsection
