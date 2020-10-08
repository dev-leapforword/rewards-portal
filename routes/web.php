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

Route::get('/studentRegister', function () {
    return view('auth.studentRegister');
});

Route::get('/teacherMain', function () {
    return view('auth.teacherMain');
});

Route::get('/teacherLogin', function () {
    return view('auth.teacherLogin');
});

Route::get('/teacherRegister', function () {
    return view('auth.teacherRegister');
});

Route::post('/studentLoginFrom', 'Auth\LoginController@studentLoginForm')->name('studentLoginForm');

Route::group(['middleware' => ['auth', 'student']], function () {
    Route::get('/studentIndex', 'Student\StudentController@index')->name('studentIndex');

    Route::get('/studentProfile', 'Student\StudentController@profile')->name('studentProfile');
    
    Route::get('/studentActivities', 'Student\StudentController@activities')->name('studentActivities');
});

Route::group(['middleware' => ['auth', 'teacher']], function () {
    Route::get('/teacherIndex', function () {
        return view('teacher.index');
    });
    
    Route::get('/teacherProfile', function () {
        return view('teacher.profile');
    });
    
    Route::get('/teacherActivities', function () {
        return view('teacher.activities');
    });
});

Route::group(['middleware' => ['auth', 'admin']], function () {
    
});


