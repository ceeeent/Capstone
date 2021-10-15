<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\trainings;
use App\trainnow;
use App\trainlive;
use DB;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        $trainings = trainings::orderBy('created_at','desc')->paginate(5);
        $trainnow = DB::select('SELECT * FROM train_videos');
        $trainlive = DB::select('SELECT * FROM webinars');
        return view('admin')
        ->with('trainings', $trainings)
        ->with('trainnow', $trainnow)
        ->with('trainlive', $trainlive);


    }
}
