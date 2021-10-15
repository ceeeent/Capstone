<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
class manageusersdatacontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('admin.ManageUsersData');
    }

    public function list(){
      
         $users = User::all();
         
        return view('admin.manageusersdata', [
            'users' =>$users,
        ]);
    }
    public function destroy($id){
       

    }

    public function edit($id){


    }

    public function Update(){


    }
    
    
}
