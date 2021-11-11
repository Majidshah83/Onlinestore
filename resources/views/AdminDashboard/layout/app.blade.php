
<div class="wrapper">
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('dashboard')}}" class="nav-link">Dashboard</a>
      </li>
    
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
   

      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user text-capitalize"></i> {{ Auth::user()->role}}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
       <!--    <span class="dropdown-item dropdown-header">15 Notifications</span>
 -->          <div class="dropdown-divider"></div>
         
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
      </form>
          <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">Logout</a>

              
        
        </div>
     
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}"alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"> Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div> -->
        <!-- <div class="info">
          <a href="#" class="nav-link"><i class="far fa-user"></i><span class="ml-3">name</span></a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="{{route('dashboard')}}" class="nav-link ">
              <i class="far fa-circle nav-icon"></i>
              <p>
                Dashboard
               
              </p>
            </a>
    <!--  -->
          </li>
         
  
         
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Banner
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Banner List</p>
                </a>
              </li>
            </ul>
          </li>

 <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
             Product
                <i class="fas fa-angle-left right"></i>
                
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
            </ul>
          </li>
 
        </ul>


     
      
           
      </nav>
  </div>
</div>
  </aside>
</div>
