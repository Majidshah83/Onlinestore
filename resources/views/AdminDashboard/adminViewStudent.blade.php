@extends('AdminDashboard.layout.master')
@section('title', 'Dashboard')
@section('content')

<div class="container mt-2">

  <div class="row">

    <div class="col-md-10 card-header text-center font-weight-bold" style="background: cadetblue;margin-left: 19%;">
      <h2>Show All Students Record</h2>

    </div>
    <div>
    </div>
    <ul id="save_msgList"></ul>
    <div class="col-md-12">
      <table class="table" style="width: 80%;margin-bottom: 1rem;color: #212529; background-color: transparentmargin-left: 22%; margin-top: 10px;margin-left: 20%;
      ">
      <thead>
        <tr>
         <th scope="col">Id</th>
         <th scope="col">User Id</th>
         <th scope="col">Status</th>
         <th scope="col">Leave Request</th>
         <th scope="col">Leave Approval</th>
         <th scope="col">Date Time</th>
         <th scope="col">Action</th>
       </tr>
     </thead>
     <tbody> 
       @foreach($student as $students)
       <tr>
        <td>{{$students->id}}</td>
        <td>{{$students->users[0]->name}}</td>
        <td>{{$students->status ?:'N/A'}}</td>
        <td>{{$students->leave_Request ?:'N/A'}}</td>
        <td>{{$students->leave_Approval ?:'N/A'}}</td>
        <td>{{$students->date_Time}}</td>
        <td><button type="button" value="{{$students->id}}"class="btn btn-primary float-end editbtn">Edit</button></td>
        <td><button type="button" value="{{$students->id}}" class="btn btn-primary float-end btndelete">Delete</button></td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>
<!-- Edit boostrap model -->
<div class="modal fade" id="EditStudentModal" tabindex="-1" aria-labelledby="editStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <input type="hidden" id="student_id" />
        <h5 class="modal-title" id="AddStudentModalLabel">Edit Student Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <ul id="save_msgList"></ul>
        <div class="form-group mb-3">
          <label for="">User Name</label>
          <input type="text" required id="name" class="name form-control" readonly>
        </div>
        <div class="form-group mb-3">
         <p>Attendance Status:</p>
         <input type="radio" id="present" name="attendance_stat" value="P">
           <label for="html">Present</label><br>
           <input type="radio" id="absent" name="attendance_stat" value="A">
           <label for="css">Absent</label><br>
           <input type="radio" id="leave" name="attendance_stat" value="L">
         <label for="javascript">Leave</label>
       </div>
         <div class="form-group mb-3">
         <p>Leave Status:</p>
         <input type="radio" id="approve" name="App_stat" value="AP">
          <label for="html">Approve</label><br>
         <input type="radio" id="not_approve" name="App_stat" value="NAP">
          <label for="css">Not Approve</label><br>
          <input type="radio" id="na" name="App_stat" value="null">
          <label for="css">NA</label><br>
         
       </div>
      <div class="form-group mb-3">
        <label for="">Date Time</label>
        <input type="date" required  id="time" class="time form-control">
      </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="button" class="btn btn-primary update_student">Save</button>
    </div>

  </div>
</div>
</div>
<!-- end Add bootstrap model -->

<!--Start of Delete model-->
<div class="modal fade" id="deleteBooktModal" tabindex="-1" aria-labelledby="deleteStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Book Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4>Confirm to Delete Data ?</h4>
        <input type="hidden" id="deleteing_id">
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary delete_book">Yes Delete</button>
      </div>
    </div>
  </div>
</div>
</div>        
</div>
<!--End of Delete model-->
<!--End of Update Ajax-->
<script type="text/javascript">
// click on Edit button 
$(document).on('click', '.editbtn', function (e) {
 e.preventDefault()
            var student_id= $(this).val(); //edit id 
            // alert(student_id)
            $('#EditStudentModal').modal('show');
            $.ajax({
              type: "GET",
              url: "/admin-edit-students/"+student_id,
              success: function(response)

              {
                if(response.status ==400)
                {
                  alert("Errors 404");
                  $('#EditStudentModal').modal('hide');

                }
                else{
                    // console.log(response.book);
                    //data show in text filed
                    console.log(response.student);
                   // $('#leave').val(response.student.leave_Request);  
                    //$('#approve').val(response.student.leave_Request);
                    $('#student_id').val(response.student.id);
                    $('#name').val(response.student.users[0].name);
                    $('#time').val(response.student.date_Time);
                    
                    if (response.student.status == "A")
                    {

                      $('#absent').prop('checked', true);
                    }
                    else if(response.student.status == "P")
                    {
                      $('#present').prop('checked', true);
                      
                    }
                    else
                    {
                      $('#leave').prop('checked', true);
                      
                    }

                    if (response.student.leave_Request =='1')
                    {

                      $('#approve').prop('checked', true);
                    }
                    else if(response.student.leave_Approval =='0')
                    {
                      $('#not_approve').prop('checked', true);
                      
                    }
                    else
                    {
                      $('#na').prop('checked', true);
                      
                    }


                  }
                  

                }
                
              });

            $('.btn-close').find('input').val('');
          });
//update

$(document).on('click','.update_student', function(e)
{
 e.preventDefault();
 var studentid=$('#student_id').val(); // get id
 var data = {
  
  
  'status':$("input[name=attendance_stat]:checked").val(),
  'leave_status':$("input[name=App_stat]:checked").val(),

   
}
console.log("data",data);
$.ajaxSetup(
{
  headers:{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
$.ajax({
 type:"Post",
 url:"/admin-update-students/"+studentid,
       data:data, //in data store tile,code,author
       dataType: "json",
       success: function (response) {
        if(response.status ==400)
        {
         alert("Errors 400");
         
       }
       else
       {
         $('#editModal').find('input').val('');
         $('#editModal').modal('hide');
         window.location.replace("admin-view-students");
       }
     }

   });
});


//update

//delete button
$(document).on('click', '.btndelete', function (e) {
  e.preventDefault();
  $('#deleteBooktModal').modal('show');
  var book_id = $(this).val();
  $('#deleteing_id').val(book_id);
});
$(document).on('click', '.delete_book', function (e) {
  e.preventDefault();
   var id = $('#deleteing_id').val(); //id get book
   $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
   $.ajax({
    type: "DELETE",
    url: "/admin-delete-students/" + id,
    dataType: "json",
    success: function (response) {
      if (response.status == 404) {
        alert("Errors 404");
      }
      else
      {
        $('#DeleteModal').modal('hide');
       

      }

    }
  });
 });

</script>
@endsection

