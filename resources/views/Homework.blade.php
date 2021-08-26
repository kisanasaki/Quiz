@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="card">
      <div class="card-header">
        課題選択
      </div>
      <div class="card-body">
        <div class="col text-center">

            <a href="{{ url('select/1') }}" class="col-4 mt-3 btn btn-primary">レベル1</a>
            <a href="{{ url('select/2') }}" class="offset-1 col-4 mt-3 btn btn-primary">レベル2</a>
            <a href="{{ url('select/3') }}" class="col-4 mt-3 btn btn-primary">レベル3</a>
            <a href="{{ url('select/4') }}" class="offset-1 col-4 mt-3 btn btn-primary">レベル4</a>
            <a href="{{ url('select/5') }}" class="col-4 mt-3 btn btn-primary">レベル5</a>
            <a href="{{ url('select/6') }}" class="offset-1 col-4 mt-3 btn btn-primary">レベル6</a>
            <a href="{{ url('select/7') }}" class="col-4 mt-3 btn btn-primary">レベル7</a>
            <a href="{{ url('select/8') }}" class="offset-1 col-4 mt-3 btn btn-primary">レベル8</a>
            <a href="{{ url('select/9') }}" class="col-4 my-3 btn btn-primary">レベル9</a>
            <a href="{{ url('select/10') }}" class="offset-1 col-4 my-3 btn btn-primary">レベル10</a>

        </div>

      </div>
      <div class="card-footer text-center">
        <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
      </div>
    </div>

  </div>
</div>

@endsection
