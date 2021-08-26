<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionAdd extends Model
{
    //
    public function admin_check(){
      $admin_check = DB::table('Quiz.users')
      ->select('admin')
      ->where('id',$id_check)
      ->get();
      return $admin_check;
    }
}
