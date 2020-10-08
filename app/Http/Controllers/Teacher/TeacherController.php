<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class TeacherController extends Controller
{
    public function index(Request $request){
        if (Auth::check()){
            $udise = Auth::user()->udise;

            if (!empty($udise)) {
                $schoolDetails = DB::connection('mysql1')
                                ->table('all_master_data')
                                ->select('amd_school', 'amd_school_type', 'amd_medium')
                                ->where('amd_school_code', $udise)
                                ->get();

                return view('teacher.index')->with('schoolDetails', $schoolDetails);
            }
            else{
                return redirect(route('teacherIndex'));  // redirect to page where student update School Details
            }
        }
        else{
            return view('auth.teacherLogin');
        }
    }

    public function profile(Request $request){
        if (Auth::check()){
   
        }
        else{
            return view('auth.teacherLogin');
        }
    }

    public function activities(Request $request){
        if (Auth::check()){
            
        }
        else{
            return view('auth.teacherLogin');
        }
    }
}
