<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\trainnow;
use DB;
class TrainNowController extends Controller 
{

  public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

      //$trainnow = trainings::orderBy('created_at','asc')->paginate(10);

      $trainnow = DB::select('SELECT * FROM train_videos');
      return view('user.online')->with('trainnow', $trainnow); 

      //return View::make('trainnow','admin.online', $trainnow)->nest('trainnow','admin.home', $trainnow);

    }  
    public function store(Request $request){
      $request->validate([
        'name' =>'required',
        'description'=>'required',
        'youtube_url' => 'required',
        'image_url' =>'required|image|max:2048',
        'pdf_url' =>'required|mimes:pdf,docx|max:2048'
        
      ]); 

      $image = request()->file('image_url');
      $new_name = rand().'.'.$image->getClientOriginalExtension();
      $image->move(public_path('uploads'),$new_name);

      $pdf = $request->file('pdf_url');
      $new_pdf = rand().'.'.$pdf->getClientOriginalExtension();
      $pdf->move(public_path('uploads'),$new_pdf);
     

      $form_data = array(
              'name' => $request->name,
              'description' =>$request->description,
              'venue'=>$request->venue,
              'image_url' => $new_name,
              'youtube_url'=>$request->youtube_url,
              'pdf_url' => $new_pdf
              
          );

          dd($form_data);


         trainnow::create($form_data);
 
      return redirect('/addtrainnow')->with('success', 'FILE SUCCESS ');


        }

    public function show($id)
    {
        $trainnow = trainnow::find($id);
        return view('user.now')->with('trainnow', $trainnow);

        
    }
    
}
