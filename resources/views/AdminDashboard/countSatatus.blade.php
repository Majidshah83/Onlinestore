@extends('AdminDashboard.layout.master')
@section('title', 'Dashboard')
@section('content')
<div class="col-md-8">
      <table class="table table table-striped table-dark" style="margin-left: 38%;margin-top: 4%;">
        <h2 style=" margin-left: 53%;margin-top: 2%;color: blue;">Student Attendance Report </h2>
       
        <thead class="thead-dark" >
          <tr>
           
            <th scope="col">User Name</th>
            <th scope="col">Absent Count</th>
            <th scope="col">Present Count</th>
            <th scope="col">Leave Count</th>
           
          </tr>
        </thead> 
        <tbody>
       
         @foreach($ViewAttendance as $ViewAttendances)
         <tr>
            <td>{{$ViewAttendances->users[0]->name}}</td>
             <td>{{$ViewAttendances->present}}</td>
              <td>{{$ViewAttendances->absent}}</td>
               <td>{{$ViewAttendances->leaves}}</td>
            
         </tr>
          @endforeach
        
        </tbody>
      </table>

</div>
@endsection