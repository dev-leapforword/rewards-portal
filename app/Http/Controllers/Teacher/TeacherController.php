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

            $udise = Auth::user()->udise;
            $teacherWhatsappNumber = Auth::user()->whatsappNumber;

            if (!empty($udise)) {
                $schoolDetails = DB::connection('mysql1')
                                ->table('all_master_data')
                                ->select('amd_district', 'amd_taluka', 'amd_kendra', 'amd_school')
                                ->where('amd_school_code', $udise)
                                ->get();


                $readingCountRegistredStudent = DB::table('users')
                                            ->select('id')
                                            ->whereIn('standard', [1, 2, 3,4])
                                            ->where('userType', 'student')
                                            ->where('teacherWhatsappNumber', $teacherWhatsappNumber)
                                            ->count();

                $grammarCountRegistredStudent = DB::table('users')
                                            ->select('id')
                                            ->whereIn('standard', [5, 6, 7, 8, 9, 10])
                                            ->where('userType', 'student')
                                            ->where('teacherWhatsappNumber', $teacherWhatsappNumber)
                                            ->count();

                // var_dump($readingCountRegistredStudent);

                // var_dump($grammarCountRegistredStudent);
                

                return view('teacher.profile')->with(['schoolDetails' => $schoolDetails, 'readingCountRegistredStudent' => $readingCountRegistredStudent, 'grammarCountRegistredStudent' => $grammarCountRegistredStudent]);
            }
            else{
                return redirect(route('teacherIndex'));  // redirect to page where student update School Details
            }           
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
