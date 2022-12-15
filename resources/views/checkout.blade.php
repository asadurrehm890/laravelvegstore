@extends('layout.main')

@section('content')



<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">Checkout</h2>
         <p class="wh"><a href="{{ route('home') }}" class="wh">Home</a> / checkout </p>
      </div>

  </section>
  <section class="ptop100 pbot100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 mobcenter">
              <h2>Checkout</h2>
          <form class="" action="{{ route('order') }}" method="post">
              @csrf
              <label for="" class="form-label w-100">Name
                  <input class="form-control" type="text" name="oname" value="">
              </label>
              <label for="" class="form-label w-100 ">Email
                  <input class="form-control " type="email" name="oemail" value="">
              </label>
              <label for="" class="form-label w-100 ">Phone
                  <input class="form-control " type="tel" name="ophone" value="">
              </label>
              <label for="" class="form-label w-100 ">country
                  <input class="form-control" type="text" name="ocountry" value="">
              </label>
              <label for="" class="form-label w-100">Address
                  <input class="form-control" type="text" name="oaddress" value="">
              </label>
              <label for="" class="form-label w-100">zipcode
                  <input class="form-control" type="text" name="ozip" value="">
              </label>
              <div class="d-none d-md-block">


              <table class="table align-middle mt-5 table-responsive">
  <thead>
    <tr>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>

    </tr>
  </thead>
  <tbody>
    @foreach($carts as $cart)
    @if(Auth::user()->id==$cart->userid)
    <tr>
      <th><img class="img-fluid wh50" src="./assets/img/products/{{ $cart->img }}" alt=""></th>
      <td>{{ $cart->name }}</td>
      <td class="text-center">{{ $cart->qty }}</td>
      <td class="text-center">{{ $cart->subtotal }}</td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
</div>


<div class="d-block d-md-none">

@foreach($carts as $cart)
@if(Auth::user()->id==$cart->userid)
<table class="table align-middle mt-5 table-responsive">

<tbody>

<tr>
<td><img class="img-fluid wh50" src="./assets/img/products/{{ $cart->img }}" alt=""></td>

</tr>
<tr>
  <td>{{ $cart->name }}</td>

</tr>
<tr>
  <td class="text-center">
    Quantity: {{ $cart->qty }}</td>

</tr>
<tr>
  <td class="text-center">Total: {{ $cart->subtotal }}</td>
</tr>


</tbody>
</table>
@endif
@endforeach


</div>
<?php $total=0; ?>
@foreach($carts as $cart)
@if(Auth::user()->id==$cart->userid)



 <?php $total=$total+$cart->subtotal ?>
    <input type="hidden" name="ototal" value="{{ $total }}">
    @endif
@endforeach


<h6 class="gr mt-4 text-center">Total: ${{ $total }}</h6>
<input type="hidden" name="ouser" value="{{ Auth::user()->id }}">
<h6 class="gr mt-4 text-center mt-4">Payment Method</h6>
<p class="text-dark text-center mb-4">Cash On Delivery</p>
@if($total>0)
<div class="text-center mt-4">
<button type="submit" class="btn2 border-0">Place Order <i class="ms-2 fa-solid fa-arrow-right"></i></button>
</div>
@endif
          </form>



          </div>

        </div>
      </div>
  </section>
</main>


@endsection
