<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('studentMain', function () {
    return view('auth.studentMain');
});

Route::get('/studentLogin', 'Auth\LoginController@studentLogin')->name('studentLogin');

Route::post('/studentLoginFrom', 'Auth\LoginController@studentLoginForm')->name('studentLoginForm');

Route::get('/studentRegister', function () {
    return view('auth.studentRegister');
});

Route::get('/teacherMain', function () {
    return view('auth.teacherMain');
});

Route::get('/teacherLogin', 'Auth\LoginController@teacherLogin')->name('teacherLogin');

Route::post('/teacherLoginFrom', 'Auth\LoginController@teacherLoginForm')->name('teacherLoginForm');

Route::get('/teacherRegister', function () {
    return view('auth.teacherRegister');
});



Route::group(['middleware' => ['auth', 'student']], function () {
    Route::get('/studentIndex', 'Student\StudentController@index')->name('studentIndex');

    Route::get('/studentProfile', 'Student\StudentController@profile')->name('studentProfile');
    
    Route::get('/studentActivities', 'Student\StudentController@activities')->name('studentActivities');
});



Route::group(['middleware' => ['auth', 'teacher']], function () {
    Route::get('/teacherIndex', 'Teacher\TeacherController@index')->name('teacherIndex');
    
    Route::get('/teacherProfile', 'Teacher\TeacherController@profile')->name('teacherProfile');
    
    Route::get('/teacherActivities', 'Teacher\TeacherController@activities')->name('teacherActivities');
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    
});


