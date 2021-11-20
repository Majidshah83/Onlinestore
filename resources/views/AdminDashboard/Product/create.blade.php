@extends('AdminDashboard.layout.master')
@section('title', 'Product Create')
@section('content')



  <!-- /.navbar -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Category List</h1> -->
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <!-- <div class="col-3">
          </div> -->
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Product</h3>
              </div>


              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data" id="Supplierform">    
  @csrf
                <div class="card-body">
                        @if(count($errors)>0)
              @foreach ($errors->all() as $errors)
              <p class="alert alert-danger">{{$errors}}</p>
              @endforeach
              @endif
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                  
                  <div class="form-group">
                    <label>Product Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Product Name" >
                  </div>
               <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" class="form-control"name="quantity">
                  </div>
                   <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" class="form-control"name="price">
                  </div>
                  <div class="form-group">
                    <label>Product Details</label>
                    <textarea class="form-control"name="detail"></textarea> 
                  </div>
                  <div class="form-group">
                    <label>Product Image</label>
                    <input type="file" class="form-control"name="image">
                  </div>
                
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- Form Element sizes -->
           
            <!-- /.card -->

            <!-- /.card -->

            
            <!-- /.card -->
          
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          
          
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>

<!-- ./wrapper -->



