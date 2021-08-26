<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    //
    public function index(){
      // ソート済みの配列を返す
      //keysの中に問題のジャンルを入れる
      //countsに正解率を入れる
      $keys = ['変数','配列','クラス','繰り返し','条件分岐'];
      $counts = [10,4,3,2,1];
      return view('chart',compact('keys','counts'));

    }
}
