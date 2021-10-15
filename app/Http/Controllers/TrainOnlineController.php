<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\trainnow;
use App\trainlive;
use DB;
class TrainOnlineController extends Controller 
{

  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {


      $trainnow = DB::select('SELECT * FROM train_videos');
      $trainlive = DB::select('SELECT * FROM webinars');
      return view('user.online')
      ->with('trainnow', $trainnow)
      ->with('trainlive', $trainlive);

    }  


    public function shownow($id)
    {
        $trainnow = trainnow::find($id);
        return view('user.now')->with('trainnow', $trainnow);

        
    }
    
}
 