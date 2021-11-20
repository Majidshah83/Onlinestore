@extends('AdminDashboard.layout.master')
@section('title', 'product')
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
@endsection




