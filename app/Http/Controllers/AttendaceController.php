<?php

namespace App\Http\Controllers;
use Auth;
use\App\Models\Attendace;
use\App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AttendaceController extends Controller
{
    public function attdanceMark(Request $request)
    {     
         
        $date = date('Y-m-d');
        $id = Auth::user()->id;
        $data =Attendace::where('date_Time','=',$date)->where('user_id','=',$id)->get();
        if($data->isEmpty()){
           
            $book = new Attendace;
            $book->user_id = Auth::user()->id;
            $book->status = $request->input('status');
            $book->leave_Request = $request->input('leave_Request');
            $book->save();
            return response()->json([
                'status'=>200,
                'message'=>'Attendnce successfully mark.'
            ]);
          
        }else
        {
             return response()->json([
                'status'=>200,
                'message'=>'Attendce already mark.'
            ]);
        }
           
    } 

    public function viewAttendce()
    {
        $id = Auth::user()->id;
        $attendance = Attendace::where('user_id','=',$id)->with('users')->get();
        return view('AdminDashboard.viewAttendce',compact('attendance'));
    }

    public function adminViewStudents()
    { 
        $student=Attendace::with('users')->get();
        return view('AdminDashboard.adminViewStudent')->with('student',$student);
        
    }

     public function editstudent($id)
       {
        $student=Attendace::with('users')->where('id',$id)->first();
        if($student)
        {
             return response()->json([
                'status'=>200,
                'student'=>$student,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>400,
                'message'=>'No student Found',

            ]);
        }
       
    }

    public function destroy($id)
    {
        $student = Attendace::find($id);
        if($student)
        {
            $student->delete();
            return response()->json([
                'status'=>200,
                'message'=>'Student Deleted Successfully.'
            ]);
           

        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No student  Found.'
            ]);
        }
    }

    public function updateStudentlist(Request $request,$id)
   {
      $student = Attendace::find($id);

      if($student)
      {
        if ($request->leave_status=='AP') {  
           $student->leave_Request=1;
           $student->leave_Approval=1;
           $student->status = $request->input('status');
           //if Admin slecet A and P
           if($request->input('status')=='P'||$request->input('status')=='A')
           {
            $student->leave_Request=NULL;
            $student->leave_Approval=NULL;
           }
           $student->update();
           return response()->json([
                    'status'=>200,
                    'message'=>'Student Updated Successfully.'
                ]);

        }
        elseif($request->leave_status=='NAP')
        {
           $student->leave_Approval=0;
          $student->leave_Request=NULL;
           $student->status = $request->input('status');
           //if Admin slecet A and P
           if($request->input('status')=='P'||$request->input('status')=='A')
           {
            $student->leave_Request=NULL;
            $student->leave_Approval=NULL;
           }
           $student->update();
           return response()->json([
                    'status'=>200,
                    'message'=>'Student Updated Successfully.'
                ]);
        } //NA case
        else{
           $student->leave_Request=NULL;
           $student->leave_Approval=NULL;
           $student->status = $request->input('status');
           $student->update();
           return response()->json([
                    'status'=>200,
                    'message'=>'Student Updated Successfully.'
                ]);
        }

      }
      else{
         {
         return response()->json([
                    'status'=>400,
                    'message'=>'Book not found.'
                ]);
        }
      }
      
  }
//FromDate Todate show
public function ReportFromDate()
{   
 return view('AdminDashboard.fromDateReport');
}
//FromDate Todate
 public function Reportpost(Request $request)
 {
$dateS=$request->input('fromdate');
$date=$request->input('todate');
$user=$request->input('user');
$dateFrom=Carbon::parse($dateS);
$dateTO=Carbon::parse($date);
$userid=User::where('name',$user)->first();
$result = Attendace::with('users')->where('user_id',$userid->id)->whereBetween('date_Time', [$dateFrom->format('Y-m-d'), $dateTO->format('Y-m-d')])->get();
return view('AdminDashboard.fromDateReport',compact('result'));

 }

 public function countAttendence()
 {
  
   $ViewAttendance = Attendace::with('users')->select("user_id",DB::raw('count(IF(status = "P", 1, NULL)) as present'),DB::raw('count(IF(status = "A", 1, NULL)) as absent'),DB::raw('count(IF(status = "L", 1, NULL)) as leaves'))->groupBy("user_id")->get();
   return view('AdminDashboard.countSatatus',compact('ViewAttendance'));
    
    
 }
//System FromDate Todate report show 
public function systemReportFromDate()
{   
 return view('AdminDashboard.systemReport');
}
//System FromDate Todate report
public function systemReportpost(Request $request)
 {
$dateS=$request->input('fromdate');
$date=$request->input('todate');
$dateFrom=Carbon::parse($dateS);
$dateTO=Carbon::parse($date);

$result=Attendace::with('users')->whereBetween('date_Time', [$dateFrom->format('Y-m-d'), $dateTO->format('Y-m-d')])->get();

   return view('AdminDashboard.systemReport',compact('result'));
}

public function upGradShow()
{
    return view('AdminDashboard.Upgradsystem');
}
}
