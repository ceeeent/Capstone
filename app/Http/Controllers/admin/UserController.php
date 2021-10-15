<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\support\facades\Auth;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.ManageUsersData')->with('users',User::all());
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(auth::user()->id==$id){
            return redirect()->route('users.index');
        }
        return view('admin.UsersEdit')->with(['user'=> User::find($id),'users'=>User::all()]);
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
            'username'=> 'required',
            'email'=>'required',
            'firstname'=>'required',
            'lastname'=>'required',
            'company'=>'required'
        ]);

        $form_data = array(
            'username' => $request->username,
            'email' =>$request->email,
            'firstname'=>$request->firstname,
            'lastname' =>$request->lastname,
            'country' =>$request->country,
            'company'=>$request->company,
        );
        User::whereId($id)->update($form_data);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        User::destroy($id);
        return redirect()->route('users.index');
    }
}
