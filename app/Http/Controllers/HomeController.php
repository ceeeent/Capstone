<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\trainings;
use App\trainnow;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        return view('home')
        ->with('trainings', $trainings)
        ->with('trainnow', $trainnow)
        ->with('trainlive', $trainlive);


    }
}
