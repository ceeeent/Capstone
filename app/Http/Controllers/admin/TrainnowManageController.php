<?php

namespace App\Http\Controllers\admin;
use App\Trainnow;
use Illuminate\Support\Facades\Storage;
use Illuminate\support\facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainnowManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ManageTrainnowData')->with('Trainnow',trainnow::all());
    }

    
    public function edit($id)
    {
        return view('admin.TrainnowEdit')->with(['trainnow'=> trainnow::find($id),'trainnows'=>trainnow::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        $request->validate([
            'name' =>'required',
            'description'=>'required',
            'youtube_url' => 'required',
            'image_url' =>'image|max:2048',
            'pdf_url' =>'mimes:pdf,docx,txt|max:2048'
            
          ]); 
    
    $trainnow = Trainnow::find($id);
    $trainnow->name = $request->input('name');
    $trainnow->description = $request->input('description');
    $trainnow->youtube_url = $request->input('youtube_url');

    if($request->has('image_url')) {
        $file = $request->file('image_url');
        $extension = $file->getClientOriginalName();
        $filename = time(). '.'.$extension;
        $file->move('/uploads', $filename);
        $trainnow->image_url =$file;
        
    }

    if($request->has('pdf_url')) {
        $file = $request->file('pdf_url');
        $extension = $file->getClientOriginalName();
        $filename = time(). '.'.$extension;
        $file->move(public_path('/uploads'), $filename);
        $trainnow->pdf_url =$file;
        
    }

    $trainnow->update();
       
        return redirect()->route('Trainnow.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trainnow::destroy($id);
        return redirect()->route('Trainnow.index');
    }
}
