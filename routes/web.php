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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('table', 'NewcompaniesController@table')->middleware('admin');
Route::get('status', 'NewcompaniesController@status')->middleware('admin');
Route::get('leave', 'NewcompaniesController@leave')->middleware('admin');
Route::get('record', 'NewcompaniesController@record')->middleware('admin');
Route::get('usersprofile', 'NewcompaniesController@usersprofile')->middleware('admin');
Route::get('mac', 'AddmacController@mac')->middleware('auth');
Route::resource('newmac', 'AddmacController')->middleware('admin');
Route::resource('newcompany', 'NewcompaniesController')->middleware('admin');
Route::resource('AAA', 'PositionController')->middleware('admin');
Route::get('pos', 'PositionController@pos')->middleware('admin');
//Route::get('posup', 'PositionsupsController@uppos')->middleware('admin');
Route::resource('posup', 'PositionsupsController')->middleware('admin');
//--------------------------------------------------------//


//------Route:: chief::Folder------ //
///Route::get('chcode', 'MemberuserController@index')->middleware('auth');
Route::get('tablech', 'MemberuserController@table')->middleware('auth');
Route::get('VH', 'MemberuserController@index')->middleware('auth');
///Route::get('leavech', 'LeaveController@leave')->middleware('auth');
Route::get('recordch', 'MemberuserController@record')->middleware('auth');
//Route::get('timestampch', 'MemberuserController@timestamp')->middleware('auth');
Route::get('usersprofilech', 'MemberuserController@usersprofile')->middleware('auth');
Route::resource('letter', 'LeaveController')->middleware('auth');
//Route::POST('canvassch', 'LeaveController@index')->middleware('auth');
Route::resource('timestampch', 'TimesController')->middleware('auth');
Route::resource('down', 'TimesController')->middleware('auth');
//--------------------------------------------------------//

//--------------------------------------------------------//
//--------------member-chief-personnel------------------//
Route::resource('member', 'MemberuserController')->middleware('auth');


//--------------member--personnel------------------//
Route::get('tablepe', 'MemberuserController@tablepe')->middleware('auth');
Route::get('record2', 'MemberuserController@record2')->middleware('auth');
Route::get('leave2', 'MemberuserController@leave2')->middleware('auth');
Route::get('leave3', 'MemberuserController@leave3')->middleware('auth');
/*Route::get('chif', function() {
//--------------member--personnel------------------//
Route::get('tablepe', 'MemberuserController@tablepe')->middleware('auth');
Route::get('record2', 'MemberuserController@record2')->middleware('auth');
Route::get('record2', 'MemberuserController@record2')->middleware('auth');
	 print_r(Auth::user()->email);
});*/