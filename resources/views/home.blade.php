@extends('layouts.app')
<head>
<link rel="stylesheet" href="{{asset('/css/style.css')}}">

</head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">USERS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        </div>

                    @endif
                    You are logged in!
                </div>

            </div>


        </div>
        <div class="col">

              <a href="{{ url('/Exam') }}" class="offset-1 col-4 btn btn-primary">テスト</a>
              <a href="{{ url('/Gamification') }}" class="offset-1 col-4 btn btn-primary">マイページ</a>
              <a href="{{ url('/Homework') }}" class="offset-1 col-4 mt-3 btn btn-primary">課題</a>
              <a href="{{ url('/BeforeQuestionnaire') }}" class="offset-1 col-4 mt-3 btn btn-primary">アンケート</a>
              <a href="{{ url('/AfterQuestionnaire') }}" class="offset-1 col-4 mt-3 btn btn-primary">性格検査</a>
              <!-- 問題追加は手動でやることにしました -->
              <!-- <a href="{{ url('/QuestionAdd/index') }}" class="offset-1 col-4 mt-3 btn btn-primary">問題追加</a> -->
          </div>

        </div>
</div>
@endsection
