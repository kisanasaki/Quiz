<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AfterQuestionnaireController extends Controller
{
    //
    public function index(){
      return view('AfterQuestionnaire');
    }

    public function num(){
      $nums = DB::table('homework')
      ->select('id','question','choice1','choice2','choice3','choice4')
      ->get();
      return view('AfterQuestionnaire',compact('muns'));
    }

}
