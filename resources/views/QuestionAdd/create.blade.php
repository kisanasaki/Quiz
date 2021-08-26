登録

<form method="POST" action="{{route('QuestionAdd.store')}}">
  @csrf
  問題文
  <input type="text" name="question">
  正解
  <input type="text" name="correct">
  選択肢1
  <input type="text" name="choice1">
  選択肢1
  <input type="text" name="choice2">
  選択肢1
  <input type="text" name="choice3">
  選択肢1
  <input type="text" name="choice4">
  レベル
  <input type="text" name="level">
  <input type="submit" value="登録する">
</form>
