<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\trainlive;
use App\speaker;
class AdminTrainLiveController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function create()
    {

        $speaker = speaker::all();

        return view('admin.addtrainlive', compact('speaker'));

    }
    
    
    public function store(Request $request){
    $request->validate([
        'title' =>'required',
        'webinars_description'=>'required',
        'webinars_date'=>'required',
        'image_url' =>'required|image|max:2048',
        'admission'=>'required',
        'speaker_id'=>'required'
      ]); 
      $image = $request->file('image_url');
      $new_name = rand().'.'.$image->getClientOriginalExtension();
      $image->move(public_path('uploads'),$new_name);

            $form_data = array(
              'title' => $request->title,
              'webinars_description' =>$request->webinars_description,
              'webinars_date'=>$request->webinars_date,
              'image_url' => $new_name,
              'admission'=>$request->admission,
              'speaker_id'=>$request->speaker_id,
          );

          trainlive::create($form_data);
     
      return redirect('/admin/users')->with('success', 'FILE SUCCESS ');
}


}