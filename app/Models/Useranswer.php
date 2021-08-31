<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\Models\DB;

class Useranswer extends Model
{
    //
    //解答を保存する
    public static function user_answer_insert($ps,$id,$ans,$answers){
      $user_id = Auth::id();
      $questions = Useranswer::insert(
        ['user_id'=>$user_id,'level'=>$ps,'homework_id'=>$id,'correct'=>$ans,'tf'=>$answers]
      );
    }

    //自分の正解数
    public static function user_point(){
      $user_id = Auth::id();
      $point = Useranswer::where('user_id',$user_id)
      ->where('tf','正解')
      ->count();

      return $point;
    }

    //ランキング
    public static function ranking(){
      $id = Auth::id();
      $ranking = Useranswer::select()
      ->where('tf','正解')
      ->where('user_id',$id)
      ->count();

      $point = User::pointupdate($ranking);
      return $point;
    }

    public static function chartLV1(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',1)
      ->count();
      return $point;
    }
    public static function chartLV2(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',2)
      ->count();
      return $point;
    }
    public static function chartLV3(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',3)
      ->count();
      return $point;
    }
    public static function chartLV4(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',4)
      ->count();
      return $point;
    }
    public static function chartLV5(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',5)
      ->count();
      return $point;
    }
    public static function chartLV6(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',6)
      ->count();
      return $point;
    }
    public static function chartLV7(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',7)
      ->count();
      return $point;
    }
    public static function chartLV8(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',8)
      ->count();
      return $point;
    }
    public static function chartLV9(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',9)
      ->count();
      return $point;
    }
    public static function chartLV10(){
      $id = Auth::id();
      $point = Useranswer::select()
      ->where('user_id',$id)
      ->where('tf','正解')
      ->where('level',10)
      ->count();
      return $point;
    }

}
