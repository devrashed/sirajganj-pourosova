<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/*Route::get('/logout', function () {
    return view('login');
});*/

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::POST('/creatasdasdapp', 'applicantController@creatapplicant');

Route::POST('/acceptapp', 'applicantController@acceptapp');

Route::get('/createuser', function () {
  return view('usercreate');
});

Route::get('/edituser', function () {
  return view('editUser')->middleware('auth');
});

Route::POST('/usercreate', 'userController@Userstore');

Route::post('Usupdate/{id}', 'userController@userupdate');

Route::get('/useredit/{id}','userController@userEdit')->middleware('auth');

Route::get('/delete/{id}','userController@userDel')->middleware('auth');

Route::get('/viewser', 'userController@viewuser')->middleware('auth');

Route::get('/activestatus/{id}', 'userController@activestatus')->middleware('auth');

Route::get('/deactivestatus/{id}', 'userController@deactivestatus')->middleware('auth');

Route::get('/viewapplicant','applicantController@viewapplicant')->middleware('auth');

Route::get('/appdetails/{id}','applicantController@detailsapp')->middleware('auth');

Route::get('/editapp/{id}','applicantController@editapplink')->middleware('auth');

Route::POST('/applicationUpdate/{id}','applicantController@appUpdate')->middleware('auth');

Route::get('/olddetailsapp/{id}','modaretController@olddetailsapp')->middleware('auth');

Route::POST('/decline', 'applicantController@declineapp')->middleware('auth');

Route::POST('/subsurvery', 'modaretController@submitsurvayer');

Route::POST('/subapplication', 'modaretController@subapp');

Route::get('/oldapplication', 'modaretController@Adminoldapp');

Route::get('/planapprove', 'modaretController@planapprove');

Route::POST('/creatapprove', 'modaretController@approvecreate');

Route::get('/allplan', 'modaretController@viewallplan');

Route::get('/vdetailplan/{id}','modaretController@detailpan');


Route::POST('/oldadminsubmit', 'modaretController@Adminoldappsubmit');

Route::get('/cash/{id}', 'modaretController@cashdata');

Route::POST('/cashupload', 'modaretController@cashcreate');

Route::get('/pdfdetails/{id}', 'modaretController@pdfdownload');

Route::get('/imagecreate', 'modaretController@imagecreate');

Route::POST('/imagestore', 'modaretController@imagestore');

Route::get('/imageview', 'modaretController@imageview');

Route::get('/succssapp', 'applicantController@successapp')->middleware('auth');

Route::get('/invest/{id}', 'applicantController@invest')->middleware('auth');

Route::POST('/investapp', 'applicantController@investsub');

Route::POST('/mayorsub', 'modaretController@mayorsub');

Route::get('/smsrequest/{id}', 'modaretController@smsrequest');

Route::POST('/requestcreat', 'modaretController@requestcreat');

Route::get('/cancelapp', 'applicantController@cancelapp')->middleware('auth');

Route::get('/completeapps/{id}', 'modaretController@completeapps')->middleware('auth');

Route::get('/printsection/{id}', 'modaretController@printsection')->middleware('auth');


Route::get('/cancledeatils/{id}', 'modaretController@cancledeatils');

Route::get('/report', function () {
  return view('report');
});

Route::POST('/reportype', 'modaretController@reportype');

Route::get('/reportdeatils/{id}', 'modaretController@reportdeatils');

Route::get('/printoption/{id}', 'applicantController@lastappid');