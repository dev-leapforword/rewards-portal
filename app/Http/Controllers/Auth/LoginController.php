<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }

    public function studentLogin(){
        if (Auth::check()){
            return view('student.index');
        } else {
            return view('auth.studentLogin');
        }
    }

    public function studentLoginForm(Request $request){
        // dd($request);

        if (Auth::check()){
            return view('student.index');
        } else {
            $rollno = $request->post('rollno');

            // $user = DB::table('users')->where('rollNumber', $rollno)->first();

            $user = User::where([['rollNumber', '=', $rollno]])->first();

            if ($user) {
                Auth::login($user, true);                
                return redirect(route('studentIndex'));
            } else {
                return redirect()->back()->with('fail', 'Roll Number Not Found');
            }

        }
    }
}
