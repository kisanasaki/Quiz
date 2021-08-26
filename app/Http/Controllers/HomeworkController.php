<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use app\Models\Homework;

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
    public function answer($ps,$id,$ans){
      $answers = \App\Models\Homework::judgeans($ps,$id,$ans);
      $commentary = \App\Models\Homework::commentary($ps,$id);
      $question = \App\Models\Homework::getlevel($ps,$id);

      return view('Answer',compact('answers','commentary','question','id','ps'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $Homework = new Homework;

        $Homework->$question = $request->input('question');
        $Homework->$correct = $request->input('correct');
        $Homework->$choice1 = $request->input('choice1');
        $Homework->$choice2 = $request->input('choice2');
        $Homework->$choice3 = $request->input('choice3');
        $Homework->$choice4 = $request->input('choice4');
        $Homework->$level = $request->input('level');
        $Homework->save();
        return redirect('QuestionAdd/index');
    }


}
