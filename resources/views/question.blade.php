@extends('layouts.app')

@section('content')
@foreach ($questions as $question)
<div class="container">
  <div class="card mb-4">
    <div class="card-header">
      問題 {{$question->id}}
    </div>
    <div class="card-body">
      {{ $question->question }}
    </div>
    <div class="card-footer">
      <!-- 同じレベルで問題IDが次のものを表示 -->
      <a href="{{ route('answer',['ps'=>$question->level,'id'=>$question->id,'ans'=>$question->choice1]) }}" class="col-4 mt-3 btn btn-primary">{{ $question->choice1}}</a>
      <a href="{{ route('answer',['ps'=>$question->level,'id'=>$question->id,'ans'=>$question->choice2]) }}" class="col-4 mt-3 btn btn-primary">{{ $question->choice2}}</a>
      <a href="{{ route('answer',['ps'=>$question->level,'id'=>$question->id,'ans'=>$question->choice3]) }}" class="col-4 mt-3 btn btn-primary">{{ $question->choice3}}</a>
      <a href="{{ route('answer',['ps'=>$question->level,'id'=>$question->id,'ans'=>$question->choice4]) }}" class="col-4 mt-3 btn btn-primary">{{ $question->choice4}}</a>

    </div>
  </div>
  <div class="card-footer text-center">
    <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
  </div>
</div>

@endforeach


@endsection
