@extends('AdminDashboard.layout.master')
@section('title', 'Dashboard')
@section('content')
<style type="text/css">
  label {
    display: block;
    font: 1rem 'Fira Sans', sans-serif;
}

input,
label {
    margin: .4rem 0;
}

</style>
 <div style="border: 2px solid black;
outline: #4CAF50 solid 0px;
margin: auto;
padding: 1%;
text-align: center;
margin-left: 27%;
margin-right: 13%;
margin-top: 32px;"> 
<div>
 <form action="{{url('admin-system-upgrade')}}" method="Post">
@csrf
  <div class="fallbackDatePicker">
      <span>
        <label for="month">Select Month:</label>
        <select id="month" name="month">
          <option selected value="01">January</option>
          <option value="02">February</option>
          <option value="03">March</option>
          <option value="04">April</option>
          <option value="05">May</option>
          <option value="06">June</option>
          <option value="07">July</option>
          <option value="08">August</option>
          <option value="09">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>
      </span>
  </div>
  <div style="margin-top: 2%;">
   <button type="submit">Submit!</button> 
   </div>
</form>
</div>
</div>
<div class="col-md-8">
      <table class="table table table-striped table-dark" style="margin-left: 38%;margin-top: 4%;">
        <thead class="thead-dark" >
          <tr>
             <th scope="col">User Name</th>
            <th scope="col">Absent Count</th>
            <th scope="col">Present Count</th>
            <th scope="col">Leave Count</th>
            <th scope="col">Grade</th>
          </tr>
        </thead> 
        <tbody>
         @if(isset($result))
         @foreach($result as $results)
         <tr>
            <td>{{$results->users[0]->name}}</td>
             <td>{{$results->present}}</td>
              <td>{{$results->absent}}</td>
               <td>{{$results->leaves}}</td>
               <td> 
                @if($results->absent <=4)
                    A
                @elseif ($results->absent <=10)
                    B
                  @elseif ($results->absent <= 15)
                  C
                  @elseif ($results->absent <= 20)
                  D
                @endif
            </td>

           
         </tr>
          @endforeach
         @endif
        </tbody>
      </table>


@endsection
