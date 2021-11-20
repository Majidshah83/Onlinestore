










@extends('AdminDashboard.layout.master')
@section('title', 'Product List')
@section('content')

  <div class="content-wrapper">

     <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product List</h1>
          </div>
       
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Product Information</h3>
                 <button class="btn" style="float: right;" onclick="location.href='{{route('product.create')}}'"><i class="fa fa-plus"></i></button>
              </div>
              <!-- /.card-header -->
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
                <table id="example1" class="table table-bordered table-striped text-center">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Is Active</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  @foreach($products as $product)
                  <tr>
                    <td>{{$product->id}}</td>
                
                   <!-- <td></td> -->
                   <td>{{$product->name}}</td>
                   <td>{{$product->quantity}}</td>
<td>{{$product->detail}}</td>
<td>{{$product->price}}</td>


                   <td><img src="{{url('productImages/'.$product->image)}}" height="50px" width="50px" /></td>
<td>  @if($product->is_active === 0)
                    <button type="button" class="btn btn-status btn-sm " data-toggle="modal" data-target="#myModalblock{{$product->id}}">No</button>
                    @elseif($product->is_active === 1)
                    <button type="button" class="btn btn-status-red btn-sm " data-toggle="modal" data-target="#myModalunblock{{$product->id}}">Yes</button>
                  @endif</td>
                    <td><div class="btn-group">
                    <button type="button" class="btn  btn-primary dropdown-toggle" data-toggle="collapse"data-target="#supplier{{$product->id}}">
                      <!-- <i class="fas fa-wrench"></i> -->
                      Action
                    </button>
                    <div class="dropdown-menu dropdown-menu-right collapse" role="menu" id="supplier{{$product->id}}">
                 
                      <a data-toggle="modal" href="#myEdit" data-target="#myEdit{{$product->id}}" class="dropdown-item"><i class="fas fa-edit mr-1"></i>Edit</a>
                 

                      
                      <a data-toggle="modal" href="#myDelete" data-target="#myDelete{{$product->id}}" class="dropdown-item"><i class="fas fa-trash mr-1"></i>Delete</a>
                   
                    </div>
                  </div>
                </td>
                  </tr>
                  <!-- Modal -->
<div class="modal fade" id="myDelete{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete ?
      </div>
      <div class="modal-footer">
        <form action="{{route('product.destroy',$product->id)}}" method="post">
          @csrf
          @method('DELETE')
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myEdit{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('product.update',$product->id)}}"enctype="multipart/form-data" method="post">
          @csrf
          @method('PUT')
      <div class="modal-body">
     <div class="card-body">
                    
                    
                  
                  <div class="form-group">
                    <label>Product Name<span style="color: red;"> *</span></label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Product Name"value="{{$product->name}}">
                  </div>
                 
                   <div class="form-group">
                    <label>Product Quantity</label>
                    <input type="number" class="form-control"name="quantity"value="{{$product->quantity}}">
                  </div>
                   <div class="form-group">
                    <label>Product Price</label>
                    <input type="number" class="form-control"name="price"value="{{$product->price}}">
                  </div>
                  <div class="form-group">
                    <label>Product Details</label>
                    <textarea class="form-control"name="detail">{{$product->detail}}</textarea> 
                  </div>
                   <div class="form-group">
                    <label>Image</label>
                           <div class="custom-file">
    <input type="file" class="custom-file-input placeholder-css" id="customFile" name="new_image">
    <label class="custom-file-label" for="customFile"></label>
</div>
<input class="form-control" type="hidden" name="image" value="{{$product->image}}">
</div>


                </div>
      </div>
      <div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </form>
      </div>
    </div>
  </div>
</div>



<!-- unblock modal -->

<div class="modal fade" style="margin-top:15%" id="myModalunblock{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Inactive</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('product-block',$product->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
      <p>Are you really want to unblock?</p>
      
      </div>

      <div class="modal-footer">
        <input type="submit"  class="btn update-btn" value="Yes" />
        <button type="button" class="btn cncl" data-dismiss="modal">No</button>
      </div>
  </form>
    </div>
  </div>
</div>

<!-- Block modal -->

<div class="modal fade" style="margin-top:15%" id="myModalblock{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border-radius: 15px !important">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Product Active</h5>
        <button type="button" class="close mt-2 mr-3" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     

<form action="{{route('product-block',$product->id)}}" method="post">
        @csrf
        @method('PUT')
      <div class="modal-body">
      <p>Are you really want to block?</p>
      
      </div>

      <div class="modal-footer">
        <input type="submit" name="block"  class="btn update-btn" value="Yes" />
        <button type="button" class="btn cncl" data-dismiss="modal">No</button>
      </div>
  </form>
    </div>
  </div>
</div>

                  @endforeach
                   
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>

@endsection

