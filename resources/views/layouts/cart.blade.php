@extends('layouts.Master')
@section('title', 'Cart deatail')
@include('layouts.script')
@section('cart')
<table  class="table table-hover table-condensed">
    <thead>
        @if(session('cart'))
        <tr>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
        </tr>
        @endif
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['price'] * $details['quantity'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                          
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['image']}}" width="100" height="100" class="img-responsive"/></div> 
                            <div class="col-sm-9"> 
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{ $details['price'] }}</td>
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn-white remove-from-cart"><i class="fas fa-trash-alt small text-muted"></i></button>
                    </td>
                </tr>
            @endforeach
      
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong>Total {{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="shop" class="btn btn-warning"> Continue Shopping</a>
                <a href="checkout" class="btn btn-success">Checkout</a>
             
            </td>
        </tr>
    </tfoot>
    @else
     
     <div class="container" style="margin-top: 25px;width: 40%;">
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <center>
                    <h4 class="text-primary text-uppercase">Your shopping cart is empty</h4>
               
                </center>
            </div>
        </div>
    </div>
</div>
@endif

</table>



 <script type="text/javascript">
    $(".update-cart").change(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "POST",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
    
    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
  
        var ele = $(this);
  
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
  
</script>
 @stop
 
