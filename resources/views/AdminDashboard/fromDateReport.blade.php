@extends('AdminDashboard.layout.master')
@section('title', 'Dashboard')
@section('content')
 <div style="border: 2px solid black;
outline: #4CAF50 solid 0px;
margin: auto;
padding: 1%;
text-align: center;
margin-left: 27%;
margin-right: 13%;
margin-top: 32px;"> 
  <form action="{{url('admin-post-report')}}" method="post">
     @csrf
  <label for="user">Name:</label>
  <input type="text" id="user" name="user" placeholder="Enter Your Name"><br>
  <label for="fromdate">FromTo:</label>
  <input type="date" id="fromdate" name="fromdate"><br>
   <label for="Todate" style="margin-left: 49px;">ToDate:</label>
  <input type="date" id="todate" name="todate"><br><br>
  <input type="submit">
</form>
</div>

<div class="col-md-8">
      <table class="table table table-striped table-dark" style="margin-left: 38%;margin-top: 4%;">
        <h2 style=" margin-left: 53%;margin-top: 2%;color: blue;">Report Of Student Attendance</h2>
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
        <tbody>
         @if(isset($result))
         @foreach($result as $results)
         <tr>
            <td>{{$results->id}}</td>
            <td>{{$results->users[0]->name}}</td>
            <td>{{$results->status}}</td>
            <td>{{$results->leave_Request ?:'N/A'}}</td>
            <td>{{$results->leave_Approval ?:'N/A'}}</td>
             <td>{{$results->date_Time}}</td>
            <td></td>
         </tr>
          @endforeach
         @endif
        </tbody>
      </table>

@endsection
