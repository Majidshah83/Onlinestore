<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\AttendaceController;


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



// Auth::routes();

Route::post('admin-system-upgrade','AttendaceController@upGradPost')->name('admin-system-upgrade');
Route::get('admin-show-upgrade','AttendaceController@upGradShow')->name('admin-show-upgrade');
Route::post('admin-system-report','AttendaceController@systemReportpost')->name('admin-system-report');
Route::get('admin-system-report','AttendaceController@systemReportFromDate')->name('admin-system-report');
Route::get('admin-count-attendence','AttendaceController@countAttendence')->name('admin-count-attendence');
Route::post('admin-post-report','AttendaceController@Reportpost')->name('admin-post-report');
Route::get('admin-get-report','AttendaceController@ReportFromDate')->name('admin-get-report');
Route::post('admin-update-students/{id}','AttendaceController@updateStudentlist')->name('admin-update-students');
Route::delete('admin-delete-students/{id}','AttendaceController@destroy')->name('admin-delete-students');
Route::get('admin-edit-students/{id}','AttendaceController@editstudent')->name('admin-edit-students');
Route::get('admin-view-students','AttendaceController@adminViewStudents')->name('admin-view-students');
Route::post('attendance','AttendaceController@attdanceMark')->name('attendance');
Route::get('view','AttendaceController@viewAttendce')->name('view');
Route::post('register-user','User\UserController@registerUser')->name('register-user');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () { 
 
       Route::get('/','Admin\AdminController@dashboard')->name('dashboard');

  

});
