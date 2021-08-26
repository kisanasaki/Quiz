<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeforeQuestionnaireController extends Controller
{
    public function index(){
      return view('BeforeQuestionnaire');
    }
}
