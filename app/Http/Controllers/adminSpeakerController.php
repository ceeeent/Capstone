<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\speaker;
class adminSpeakerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function create()
    {
        return view('admin.addspeaker');
    }

    public function store(Request $request){

        $request->validate([
        'speaker_name' => 'required',
        'profession' => 'required',
        'company' => 'required',
        'position' => 'required',
        'image_url' =>'required|image|max:2048'
        ]);

        $image = request()->file('image_url');
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('uploads'),$new_name);
  
        $form_data = array(
            'speaker_name' => $request->speaker_name,
            'profession' =>$request->profession,
            'company'=>$request->company,
            'position'=>$request->position,
            'image_url' => $new_name,
        );
        speaker::create($form_data);

        return back();
    }



}
