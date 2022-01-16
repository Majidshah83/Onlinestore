      <header style="background-color: cadetblue;">
        <div class="container px-0 px-lg-3">
          <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="\index"><span class="font-weight-bold text-uppercase text-dark">Online Store</span></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <!-- Link--><a class="nav-link active" href="\index">Home</a>
                </li>
                <li class="nav-item">
                  <!-- Link--><a class="nav-link" href="\shop">Shop</a>
                </li>
               
               </ul>
              <ul class="navbar-nav ml-auto">               
                <li class="nav-item"><a class="nav-link" href="cart"> <i class="fas fa-dolly-flatbed mr-1 text-gray "></i>Cart<small class="carts "style="font-size: 11px; color: #ebebdb;">{{' '.'('.count((array) session('cart')).')'}}</small></a></li>
        
                <li class="nav-item"><a class="nav-link" href="\login"> <i class="fas fa-user-alt mr-1 text-gray"></i>Login</a></li>
               <li class="nav-item"><a class="nav-link" href="\register"> <i class="fas fa-user-alt mr-1 text-gray"></i>Register</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </header>
      <div class="container">
  
    @if(session('success'))
        <div class="alertt">
          {{ session('success') }}
        </div> 
    @endif
  
    @yield('content')
</div>
  
      <style type="text/css">
        
        .carts{
          font-size: 18px;
          font-weight: bold;
          color: black;
        }

    .alertt{
    background-color: red;
    margin-top: 7px;
    padding: 6px;
    margin-left: -3%;
    margin-right: 70%;
    color: white;
    }
    
      </style>