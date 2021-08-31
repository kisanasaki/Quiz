<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\Models\Homework;
use app\Models\Useranswer;

class HomeworkController extends Controller
{
    //
    public function index(){
      return view('Homework');
    }

    public function select($ps){
      return view('select',compact('ps'));
    }

    public function question($ps,$id){
      $questions = \App\Models\Homework::getlevel($ps,$id);
      return view('question',compact('questions'));
    }
    //
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function answer($ps,$id,$ans){
      $answers = \App\Models\Homework::judgeans($ps,$id,$ans);
      $commentary = \App\Models\Homework::commentary($ps,$id);
      $question = \App\Models\Homework::getlevel($ps,$id);
      $homework = \App\Models\Useranswer::user_answer_insert($ps,$id,$ans,$answers);
      return view('Answer',compact('answers','commentary','question','id','ps'));
    }



}
