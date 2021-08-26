@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <form>

      <div class="form-group">
        <label class="control-label">問題文</label>
        <div class="radio">
          <label><input type="radio" name="radio">選択肢1</label>
          <label><input type="radio" name="radio">選択肢2</label>
          <label><input type="radio" name="radio">選択肢3</label>
          <label><input type="radio" name="radio">選択肢3</label>
        </div>
      </div>

    </form>

      <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
    
  </div>

</div>
@endsection
