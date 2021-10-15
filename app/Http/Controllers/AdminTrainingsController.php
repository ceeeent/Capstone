<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\trainings;
use DB;
use App\onsite_list;

class AdminTrainingsController extends Controller
{ 

    public function __construct()
    {
        $this->middleware('auth');
    }
  

    public function index()
    {

        // $trainings = DB::select('SELECT * FROM trainings');
        $onsite = onsite_list::all();


        
        $trainings = trainings::orderBy('created_at','desc')->paginate(5);
        return view('admin.onsite', compact('trainings', $trainings,$onsite));

       
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        return view('admin.addtrainonsite');
    }


    public function store(Request $request){
        $request->validate([
          'title' =>'required',
          'description'=>'required',
          'admission' => 'required',
          'date' => 'required',
          'venue'=> 'required',
          'image_url' =>'required|image|max:2048'
        ]); 
        
        $image = $request->file('image_url');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'),$new_name);
          

        $form_data = array(
            'title' => $request->title,
            'description' =>$request->description,
            'admission'=>$request->admission,
            'date'=>$request->date,
            'venue'=>$request->venue,
            'image_url' => $new_name
        
        );

        trainings::create($form_data);
        return redirect('/AddTrainOnsite')->with('success', 'FILE SUCCESS ');
}

 
}
