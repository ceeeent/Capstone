<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function Adminprofile (){
        return view('admin.profile');
    }

    public function profile (){
        return view('user.profile');
    }

    

    public function index(){
        return view('welcome');
    } 

    public function About_iTrain (){
        return view('admin.aboutiTrain');
    }

    public function aboutiTrain (){
        return view('user.aboutiTrain');
    }

    public function home (){
        return view('admin.home');
    }

    public function dashboard (){
        return view('admin.dashboard');
    }

    

    public function online (){
        return view('admin.online');
    }



    public function addtrainlive (){
        return view('admin.addtrainlive');
    }

    public function addtrainnow (){
        return view('admin.addtrainnow');
    }

    public function addspeaker (){
        return view('admin.addspeaker');
    }

    public function addexam (){
        return view('admin.addexam');
    }






}
