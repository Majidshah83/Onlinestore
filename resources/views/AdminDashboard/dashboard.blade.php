@extends('AdminDashboard.layout.master')
@section('title', 'Dashboard')
@section('content')
<section class="content">
  @if(Auth::User()->role=='user')
  <div class="container" style="margin-left: 40%;">
    <button class="btn btn-primary present">Present</button>
    <button class="btn btn-primary absent" style="margin:2%">Absent</button>
    <button class="btn btn-danger leave">Leave</button>
    <button class="btn btn-dark viewAttendce" onclick="window.location='{{ route('view') }}'"style="margin: 2%;">View</button>
  </div>
  @endif
  <script type="text/javascript">
//Attandce Button
$(document).on('click', '.present', function (e) {
  e.preventDefault();
  
  var data = {
    'status': 'P',
    "_token": $('#token').val()
  }
  attdanceMark(data);
  console.log("resepose",data);

});
$(document).on('click', '.absent', function (e) {
  e.preventDefault();

  var data = {
    'status': 'A',
    "_token": $('#token').val()
  }
  attdanceMark(data);
  console.log("resepose",data);
  
});
$(document).on('click', '.leave', function (e) {
  e.preventDefault();

  var data = {
    'status': 'L',
    'leave_Request': '1'
  }
  attdanceMark(data);
  console.log("resepose",data);

});

function attdanceMark(data)
{
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $.ajax({
    type: "POST",
    url: "/attendance",
    data: data,
    dataType: "json",
    success: function (response) {
     console.log(response);
     if (response.status == 400) {
      alert("400 errors")
    }

    else {
     alert(response.message);
   }
 }
});

}
//End Attandce Button 

//view Attandace 
$(document).on('click', '.viewAttendce', function (e) {
  e.preventDefault();
  viewAttednce()

});
function viewAttednce() {
  $.ajax({
    type: "GET",
    url: "/view-attendance",
    dataType: "json",
    success: function (response) {
      console.log("resepose",response);
      
    },

  });
}


</script>
@endsection
