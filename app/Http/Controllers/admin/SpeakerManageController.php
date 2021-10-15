<?php

namespace App\Http\Controllers\admin;
use App\speaker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpeakerManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ManageSpeakerData')->with('speaker',speaker::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.SpeakerEdit')->with(['speaker'=> speaker::find($id),'spekaers'=>speaker::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'speaker_name' =>'required',
            'profession'=>'required',
            'company' => 'required',
            'image_url' =>'required|image|max:2048',
            'position' =>'required'
          ]); 
    
    $speaker = speaker::find($id);
    $speaker->speaker_name = $request->input('speaker_name');
    $speaker->profession = $request->input('profession');
    $speaker->company = $request->input('company');
    $speaker->position = $request->input('position');

    if($request->has('image_url')) {
        $file = $request->file('image_url');
        $extension = $file->getClientOriginalName();
        $filename = time(). '.'.$extension;
        $file->move('uploads', $filename);
        $speaker->image_url =$file;
    }

    
    $speaker->update();
       
    return redirect()->route('Speaker.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        speaker::destroy($id);
        return redirect()->route('Speaker.index');
    }
}
