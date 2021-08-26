@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <form>

      <div class="form-group">
        <label class="control-label">項目2</label>
        <div class="radio mb-3">
          <label class="mr-3"><input type="radio" name="radio">選択肢1</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢2</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label">項目3</label>
        <div class="radio">
          <label class="mr-3"><input type="radio" name="radio">選択肢1</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢2</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label">項目4</label>
        <div class="radio">
          <label class="mr-3"><input type="radio" name="radio">選択肢1</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢2</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label">項目5</label>
        <div class="radio">
          <label class="mr-3"><input type="radio" name="radio">選択肢1</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢2</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label">項目6</label>
        <div class="radio">
          <label class="mr-3"><input type="radio" name="radio">選択肢1</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢2</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
          <label class="mr-3"><input type="radio" name="radio">選択肢3</label>
        </div>
      </div>

      <div class="form-group">
        <label class="control-label">項目7</label>
        <input class="form-control" type="text">
      </div>

      <button class="btn btn-default">送信</button>
    </form>
    <div class="card-footer text-center">
      <a href="{{ url('home') }}" class="col-4 mt-3 btn btn-primary">戻る</a>
    </div>
  </div>

</div>
@endsection
