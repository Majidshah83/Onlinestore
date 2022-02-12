@extends('AdminDashboard.layout.master')
@section('title', 'Dashboard')
@section('content')
<div class="col-md-8">
      <table class="table table table-striped table-dark" style="margin-left: 38%;margin-top: 4%;">
        <h2 style=" margin-left: 53%;margin-top: 2%;color: blue;">Student Marked Attendance</h2>
        <thead class="thead-dark" >
          <tr>
            <th scope="col">Id</th>
            <th scope="col">User Id</th>
            <th scope="col">Status</th>
            <th scope="col">Leave Request</th>
            <th scope="col">Leave Approval</th>
            <th scope="col">Date Time</th>
          </tr>
        </thead>
        <tbody class="tab"> 
     @foreach($attendance as $attendances)
      <tr>
      <td>{{$attendances->id}}</td>
      <td>{{$attendances->user_id}}</td>
      <td>{{$attendances->status ?: 'N/A'}}</td>
      <td>{{$attendances->leave_Request ?: 'N/A'}}</td>
      <td>{{$attendances->leave_Approval ?: 'N/A'}}</td>
      <td>{{$attendances->date_Time}}</td>
      
       
    </tr>
     @endforeach
        </tbody>
      </table>
    </div>
@endsection
