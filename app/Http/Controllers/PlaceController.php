<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Useranswer;
class PlaceController extends Controller
{
    //
    public function index(){
      // ソート済みの配列を返す
      //keysの中に問題のジャンルを入れる
      //countsに正解率を入れる
      $point1 = round((\App\Models\Useranswer::chartLV1()/200)*100,2);
      $point2 = round((\App\Models\Useranswer::chartLV2()/200)*100,2);
      $point3 = round((\App\Models\Useranswer::chartLV3()/200)*100,2);
      $point4 = round((\App\Models\Useranswer::chartLV4()/200)*100,2);
      $point5 = round((\App\Models\Useranswer::chartLV5()/200)*100,2);
      $point6 = round((\App\Models\Useranswer::chartLV6()/200)*100,2);
      $point7 = round((\App\Models\Useranswer::chartLV7()/200)*100,2);
      $point8 = round((\App\Models\Useranswer::chartLV8()/200)*100,2);
      $point9 = round((\App\Models\Useranswer::chartLV9()/200)*100,2);
      $point10 = round((\App\Models\Useranswer::chartLV10()/200)*100,2);

      $keys = ['レベル1','レベル2','レベル3','レベル4','レベル5','レベル6','レベル7','レベル8','レベル9','レベル10'];
      $counts = [$point1,$point2,$point3,$point4,$point5,$point6,$point7,$point8,$point9,$point10];
      return view('chart',compact('keys','counts'));

    }
}
