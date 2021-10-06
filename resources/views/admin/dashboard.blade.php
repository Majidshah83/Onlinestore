<h1 style="text-align: center;color: blue;">Welcome to Admin dashbord</h1>

@if (Auth::user()->role=='admin')
<p style="text-align:center;color: blue;">This only for admin and only admin can see this</p>
@endif