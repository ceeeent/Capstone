<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('indexpage');


// AUTH ROUTES //


Auth::routes();


Route::post('/login/custom',
[
    'uses' => 'LoginController@login',
    'as'=> 'login.custom'

]);

Route::group (['middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index', function(){
        return view('home');
    })->name('home');;

    Route::get('/admin', 'AdminHomeController@index', function(){
        return view('admin');
    })->name('admin');

});





// ADMIN ROUTES //

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/AboutiTrain', 'PagesController@About_iTrain')->name('about');

Route::get('/AdminProfile', 'PagesController@Adminprofile');


// ADD TRAIN NOW
Route::get('/AddTrainNow', 'AdminTrainNowController@create');
Route::post('/AddTrainNow', 'AdminTrainNowController@store')->name('trainnow');

// ADD TRAIN ONSITE

Route::get('/AddTrainOnsite', 'AdminTrainingsController@create');
Route::post('/AddTrainOnsite', 'AdminTrainingsController@store')->name('onsite');

// ADD TRAIN LIVE

Route::get('/AddTrainLive', 'AdminTrainLiveController@create');
Route::post('/AddTrainLive', 'AdminTrainLiveController@store')->name('live');

// ADD SPEAKER

Route::get('admin/addspeaker', 'AdminspeakerController@create');
Route::post('/admin/addspeaker', 'AdminspeakerController@store')->name('admin/addspeaker');



Route::get('/AdminTrainOnsite', 'AdminTrainingsController@index');

Route::get('/AdminTrainOnline', 'AdminTrainOnlineController@index');
Route::get('/AdminTrainNow/{trainnow}', 'AdminTrainOnlineController@shownow');






Route::get('/addtrainlive', 'PagesController@addtrainlive');
Route::get('/addspeaker', 'PagesController@addspeaker');
Route::get('/addexam', 'PagesController@addexam');
Route::get('/addexam', 'PagesController@addexam');




// MANAGE DATA ON DATA BASE
//Route::get('/admin/Manageusersdata', 'Manageusersdatacontroller@list');



Route::get('/admin/Manageusersdata', 'manageusersdatacontroller@list');











// USER ROUTES // 

Route::get('/aboutiTrain', 'PagesController@aboutiTrain')->name('about');

Route::get('/TrainOnsite', 'TrainingsController@index');

Route::get('/TrainOnline', 'TrainOnlineController@index');
Route::get('/TrainNow/{trainnow}', 'TrainNowController@show');





Route::get('/Profile', 'PagesController@profile');





//Manage Data
Route::resource('/admin/users', 'Admin\UserController', ['except'=>['show','create','store']]);
Route::resource('/admin/Trainings', 'Admin\TrainingsManageController', ['except'=>['show','create','store']]);
Route::resource('/admin/Trainnow', 'Admin\TrainnowManageController', ['except'=>['show','create','store']]);
Route::resource('/admin/Speaker', 'Admin\SpeakerManageController', ['except'=>['show','create','store']]);
Route::resource('/admin/Trainlive', 'Admin\TrainliveController', ['except'=>['show','create','store']]);
Route::resource('/onsitelist/enroll', 'Admin\OnsiteListController', ['except'=>['show','create']]);

