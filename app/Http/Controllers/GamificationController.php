<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamificationController extends Controller
{
    public function index(){
      $point = \App\Models\Useranswer::user_point();
      return view('Gamification',compact('point'));
    }

    public function ranking(){
      //$point = \App\Models\Useranswer::user_point();
      $rankingupdate = \App\Models\Useranswer::ranking();
      $ranking = \App\Models\User::ranking();
      $rank1 = $ranking[0];
      $rank2 =  $ranking[1];
      $rank3 = $ranking[2];
      return view('ranking',compact('rank1','rank2','rank3'));
    }
}
