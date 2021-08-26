<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    /*--------------出題関連--------------*/
    //問題を一問ずつに分ける
    public static function getlevel($ps,$id){
      $questions = Homework::where('level',$ps)
      ->where('id',$id)
      ->get();
      return $questions;
    }
    /*--------------解答関連--------------*/
    //採点する
    public static function judgeans($ps,$id,$ans){
      $answer = Homework::where('level',$ps)
      ->where('id',$id)
      ->pluck('correct');
      if($ans == $answer[0]){
        return '正解';
      }elseif ($ans != $answer[0]) {
        return '不正解';
      }
    }
    //問題の解説を表示
    public static function commentary($ps,$id){
      $commentary = Homework::where('level',$ps)
      ->where('id',$id)
      ->pluck('commentary');
      return $commentary[0];
    }





}
