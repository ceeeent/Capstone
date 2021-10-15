<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\trainings;
class TrainingsManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ManageTrainingsData')->with('trainings',trainings::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $trainings  = trainings::findOrFail($id);
            return view('admin.TrainingsEdit', compact('trainings'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image_url');

        if($image!='')
        {
            $request->validate([
                    'title' =>'required',
                    'description' =>'required',
                    'admission' =>'required',
                    'date' =>'required',
                    'venue' =>'required',
                    'image_url' =>'image|max:2048'
            ]);

            $image_name = rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('uploads'),$image_name);
        }
        else{
            $request->validate([
                'title' =>'required',
                'description' =>'required',
                'admission' =>'required',
                'date' =>'required',
                'venue' =>'required'
        ]);

        }

        $form_data = array(
            'title' => $request->title,
            'description' => $request->description,
            'admission' => $request->admission,
            'date' => $request->date,
            'venue' => $request->venue,
            'image_url' => $image_name

        );
            trainings::whereId($id)->update($form_data);
            return redirect()->route('Trainings.index')->with('success', 'data is updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
