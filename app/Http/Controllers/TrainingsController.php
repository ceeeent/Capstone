<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\trainings;
use DB;
class TrainingsController extends Controller
{ 

    public function __construct()
    {
        $this->middleware('auth');
    }
  

    public function index()
    {

        // $trainings = DB::select('SELECT * FROM trainings');

        $trainings = trainings::orderBy('created_at','desc')->paginate(5);
        return view('user.onsite')->with('trainings', $trainings);

       
    }





}
