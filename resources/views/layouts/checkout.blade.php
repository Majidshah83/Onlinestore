 @extends('layouts.Master')

@section('checkout')
  <div class="container">
        <!-- HERO SECTION-->
        <section class="py-5 bg-light">
          <div class="container">
            <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
              <div class="col-lg-6">
                <h1 class="h2 text-uppercase mb-0">Checkout</h1>
              </div>
              <div class="col-lg-6 text-lg-right">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb justify-content-lg-end mb-0 px-0">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item"><a href="cart">Cart</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section>
        <section class="py-5">
          <!-- BILLING ADDRESS-->
          <h2 class="h5 text-uppercase mb-4">Billing details</h2>
          <div class="row">
            <div class="col-lg-8">

              <form action="{{url('place_Order')}}" method="POST">
                <div class="row">
                 @csrf
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase">First name</label>
                    <input class="form-control form-control-lg"  name="first_name" type="text" placeholder="Enter your first name" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" >Last name</label>
                    <input class="form-control form-control-lg"  name="last_name" type="text" placeholder="Enter your last name" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" >Email address</label>
                    <input class="form-control form-control-lg" name="email" type="email" placeholder="e.g. Jason@example.com" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase">Phone number</label>
                    <input class="form-control form-control-lg"  name="phone_number" type="tel" placeholder="e.g. +02 245354745" required>
                  </div>
                  <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase">Company name (optional)</label>
                    <input class="form-control form-control-lg" name="company_name" type="text" placeholder="Your company name" required>
                  </div>
                   <div class="col-lg-6 form-group">
                    <label class="text-small text-uppercase" >Country</label>
                    <input class="form-control form-control-lg" name="country" type="text" placeholder="your country name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase" >Address line 1</label>
                    <input class="form-control form-control-lg"  name="address_line1" type="text" placeholder="House number and street name" required>
                  </div>
                  <div class="col-lg-12 form-group">
                    <label class="text-small text-uppercase">Address line 2</label>
                    <input class="form-control form-control-lg" id="addressalt" name="address_line2" type="text" placeholder="Apartment, Suite, Unit, etc (optional)" required>
                  </div>
                  <div class="col-lg-4 form-group">
                    <label class="text-small text-uppercase" >District</label>
                    <input class="form-control form-control-lg"  name="district" type="text" required>
                  </div>
                     <div class="col-lg-4 form-group">
                    <label class="text-small text-uppercase" >City</label>
                    <input class="form-control form-control-lg"  name="city" type="text" required>
                  </div>
                  
                    <input type="hidden" class="form-control form-control-lg"  name="user_id" value="{{Auth::user()->id}}">
                 <div class="col-lg-4 form-group">
                    <label class="text-small text-uppercase">ZipCode</label>
                    <input class="form-control form-control-lg"  name="zipCode" type="text" required>
                  </div>
                  
                  <div class="col-lg-12 form-group">
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" id="alternateAddressCheckbox" type="checkbox">
                      <label class="custom-control-label text-small" for="alternateAddressCheckbox">Alternate billing address</label>
                    </div>
                  </div>
                 
                  <div class="col-lg-12 form-group">
                    <button class="btn btn-dark" type="submit">Place order</button>
                  </div>
                </div>
                 </form>
            </div>
            <!-- ORDER SUMMARY-->
        

            <div class="col-lg-4">
              <div class="card border-0 rounded-0 p-lg-4 bg-light">
                <div class="card-body">
                  <h5 class="text-uppercase mb-4">Your order</h5>
                  <ul class="list-unstyled mb-0">
                    @php $total=0  @endphp
                    @if(session('cart'))
                    @foreach(session('cart') as $id=>$details)
                     @php $total += $details['price'] * $details['quantity'] @endphp
                    <li class="d-flex align-items-center justify-content-between"><strong class="small font-weight-bold">{{$details['name']}}</strong><span class="text-muted small">{{$details['price']}}</span></li>
                    <li class="border-bottom my-2"></li>
                   
                     @endforeach
                    @endif
                    <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Total</strong><span>{{$total}}</span></li>
                   
                  </ul>
                </div>
              </div>
           
            </div>
          </div>
        </section>
      </div>
      @stop