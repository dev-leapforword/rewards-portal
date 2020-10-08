<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class StudentController extends Controller
{
    
    public function index(Request $request){
        if (Auth::check()){

            $batch = Auth::user()->batch;
            $standard = Auth::user()->standard;
            $rollNumber = Auth::user()->rollNumber;
            

            if (!empty($batch) && !empty($standard) && !empty($rollNumber)) {
                
                $activities = DB::table('activities')
                    ->select('activities.re_ac_name')
                    ->leftJoin('activities_assign', 'activities.re_ac_id', '=', 'activities_assign.re_ac_as_activity_id')
                    ->where('activities_assign.re_ac_as_batch', $batch)
                    ->where('activities_assign.re_ac_as_grade', $standard)
                    ->count();

                $myActivities = DB::table('activities')
                    ->select('activities.re_ac_name')
                    ->leftJoin('activities_assign', 'activities.re_ac_id', '=', 'activities_assign.re_ac_as_activity_id')
                    ->leftJoin('points', 'activities.re_ac_id', '=', 'points.re_po_activity_id')
                    ->where('activities_assign.re_ac_as_batch', $batch)
                    ->where('activities_assign.re_ac_as_grade', $standard)
                    ->where('points.re_po_roll_no', $rollNumber)
                    ->count();

               
                // Calculate Rank 
                
                // 1. Create View & calculate sum of points of each student who's roll number present Current user batch & in same standard
                    $queryPoint1 ="CREATE OR REPLACE VIEW point1 AS SELECT re_po_roll_no, SUM(re_po_points) AS total from rewards_points WHERE re_po_grade = ".$standard." AND re_po_batch = ".$batch." GROUP BY re_po_roll_no";

                    $createViewPoint1 = DB::select($queryPoint1);

                // 2. Generate Rank on the basis of total

                    $queryPoint2 = "CREATE OR REPLACE VIEW mainPoints AS SELECT re_po_roll_no, total, FIND_IN_SET( total,(SELECT GROUP_CONCAT(DISTINCT total ORDER BY total DESC) FROM point1)) AS rank FROM point1";

                    $createViewPoint2 = DB::select($queryPoint2);

                    $queryPoint3 = "SELECT rank, total FROM mainPoints WHERE re_po_roll_no='{$rollNumber}'";

                    $selectRank = DB::select($queryPoint3);

                    if (!empty($selectRank[0])){
                        $rank = $selectRank[0]->rank;
                        $myPoints = $selectRank[0]->total;

                        $dropView1 = DB::statement('DROP VIEW point1');

                        $dropView2 = DB::statement('DROP VIEW mainPoints');

                        return view('student.index')->with(['activities' => $activities, 'myActivities' => $myActivities, 'myPoints' => $myPoints, 'rank' => $rank]);
                    }                   

            } else {
                return redirect(route('studentIndex'));    // redirect to page where student update the standard & batch
            }
        }
        else{
            return view('auth.studentLogin');
        }
    }

    public function profile(Request $request){
        if (Auth::check()){

            $udise = Auth::user()->udise;

            if (!empty($udise)) {
                $schoolDetails = DB::connection('mysql1')
                                ->table('all_master_data')
                                ->select('amd_district', 'amd_taluka', 'amd_kendra', 'amd_school')
                                ->where('amd_school_code', $udise)
                                ->get();

                return view('student.profile')->with('schoolDetails', $schoolDetails);
            }
            else{
                return redirect(route('studentIndex'));  // redirect to page where student update School Details
            }
        }
        else{
            return view('auth.studentLogin');
        }
    }

    public function activities(Request $request){
        if (Auth::check()){
            
            $batch = Auth::user()->batch;
            $standard = Auth::user()->standard;
            $rollNumber = Auth::user()->rollNumber;

            if (!empty($batch) && !empty($standard)) {
                
                $query1 = 'CREATE OR REPLACE VIEW myView1 AS SELECT `rewards_activities`.`re_ac_id`, `rewards_activities`.`re_ac_name`, `rewards_activities`.`re_ac_date`, `rewards_activities`.`re_ac_marks` FROM `rewards_activities` INNER JOIN `rewards_activities_assign` ON `rewards_activities`.`re_ac_id` = `rewards_activities_assign`.`re_ac_as_activity_id` WHERE `rewards_activities_assign`.`re_ac_as_batch` = '.$batch.' AND `rewards_activities_assign`.`re_ac_as_grade` ='.$standard;

                $createView1 = DB::select($query1);

                $query2 = "CREATE OR REPLACE VIEW myView2 AS SELECT re_po_activity_id, re_po_roll_no FROM rewards_points WHERE rewards_points.re_po_roll_no = '{$rollNumber}'";

                $createView2 = DB::select($query2);

                $selectQuery = "SELECT myview1.re_ac_name, myview1.re_ac_date, myview1.re_ac_marks, myView2.re_po_roll_no FROM myview1 LEFT JOIN myView2 ON myView2.re_po_activity_id = myview1.re_ac_id";

                $myActivities = DB::select($selectQuery);

                $dropView1 = DB::statement('DROP VIEW myView1');

                $dropView2 = DB::statement('DROP VIEW myView2');
                

                // var_dump($myActivities);

                return view('student.activities')->with('myActivities', $myActivities);

            } else {
                return redirect(route('studentIndex'));    // redirect to page where student update the standard & batch
            }
        }
        else{
            return view('auth.studentLogin');
        }
    }

}
