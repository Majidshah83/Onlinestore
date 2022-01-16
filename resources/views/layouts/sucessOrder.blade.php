@extends('layouts.Master')
@section('title', 'Product Detail')
@section('productdeatail')

<div class="container">
   <section class="py-4"style=" margin-bottom: 8%; margin-left: 20%;margin-top: 7%;color: #5bff47;">
          <!-- BILLING ADDRESS-->
            @if(session()->has('message'))
    <div style="">
        <h1>{{ session()->get('message') }}</h1>
    </div>
@endif
        </section>

      </div>

</div>

 @stop