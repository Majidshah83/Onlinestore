<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
  
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body style="background-color: wheat;">

<h2 style="color: darkblue;margin-left: 10%;">Select Payment Method</h2>

<div class="row">
  <div class="column " style="margin-left:20%; color: blue;">
    <a href="stripe">
    <img class="icon" src="https://laz-img-cdn.alicdn.com/tfs/TB1qIthr67nBKNjSZLeXXbxCFXa-80-80.png" alt="Snow" style="width:100px"></a><div class="title" style="co">Credit/Debit Card</div>
  </div>
  <div class="column" style="color: blue;">
     <a href="{{ route('payment-success') }}">
    <img class="icon" src="https://laz-img-cdn.alicdn.com/tfs/TB1utb_r8jTBKNjSZFwXXcG4XXa-80-80.png" alt="Snow" style="width:100px"></a><div class="title">Cash On Delivery</div>

  </div>
 
  
</div>

</body>
</html>



