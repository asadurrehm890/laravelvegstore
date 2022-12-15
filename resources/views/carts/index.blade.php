@extends('layout.main')

@section('content')

<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">Cart</h2>
         <p class="wh"><a href="{{ route('shop') }}" class="wh">shop</a> / cart </p>
      </div>

  </section>

  <section class="ptop100 pbot100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 mobcenter">
              <h2>Shopping cart</h2>
              <div class="d-none d-md-block">


              <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
      <th scope="col" class="text-center">Quantity</th>
      <th scope="col" class="text-center">Price</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($carts as $cart)
    @if(Auth::user()->id==$cart->userid)
    <tr>
      <th><img class="img-fluid wh50" src="./assets/img/products/{{ $cart->img }}" alt=""></th>
      <td>{{ $cart->name }}</td>
      <td class="text-center qont">
        <div class="d-flex align-items-center justify-content-center">


        <form class="mx-2" action="{{ route('inc') }}" method="post">
           @csrf
           <input type="hidden" name="idd" value="{{ $cart->id }}">
           <button type="submit" class="inc border-0 bg-transparent"> <i class="fas fa-plus text-dark"></i> </button>
        </form>

        <input type="text" name="quantity" value="{{ $cart->qty }}" class="mx50 text-center">
        <form class="mx-2" action="{{ route('dec') }}" method="post">
           @csrf
           <input type="hidden" name="idd" value="{{ $cart->id }}">
           <button type="submit" class="dec border-0 bg-transparent"> <i class="fas fa-minus text-dark"></i> </button>
        </form>
       </div>
      </td>
      <td class="text-center price">${{ $cart->subtotal }}</td>
      <td class="text-center">
        <form class="" action="{{ route('carts.destroy', $cart->id) }}" method="post">
          @csrf
          @method('DELETE')
              <button class="text-danger border-0 bg-transparent"><i class="fa-solid fa-xmark"></i></button>
        </form>


      </td>
    </tr>
    @endif
    @endforeach

  </tbody>
</table>

    </div>

    <div class="d-block d-md-none">
      @foreach($carts as $cart)
      @if(Auth::user()->id==$cart->userid)
      <div class="card mt-4">
        <form class="" action="{{ route('carts.destroy', $cart->id) }}" method="post">
          @csrf
          @method('DELETE')
              <button class="text-danger border-0 bg-transparent"><i class="fa-solid fa-xmark"></i></button>
        </form>
        <div class="text-center p-4">
          <img class="img-fluid wh50" src="./assets/img/products/{{ $cart->img }}" alt="">
          <h6 class="my-2">{{ $cart->name }}</h6>
          <p class="d-block">${{ $cart->subtotal }}</p>
          <div class="d-flex align-items-center justify-content-center">


          <form class="mx-2" action="{{ route('inc') }}" method="post">
             @csrf
             <input type="hidden" name="idd" value="{{ $cart->id }}">
             <button type="submit" class="inc border-0 bg-transparent"> <i class="fas fa-plus text-dark"></i> </button>
          </form>

          <input type="text" name="quantity" value="{{ $cart->qty }}" class="mx50 text-center">
          <form class="mx-2" action="{{ route('dec') }}" method="post">
             @csrf
             <input type="hidden" name="idd" value="{{ $cart->id }}">
             <button type="submit" class="dec border-0 bg-transparent"> <i class="fas fa-minus text-dark"></i> </button>
          </form>
         </div>
        </div>

      </div>
      @endif
      @endforeach
      </div>
   <?php $total=0; ?>
@foreach($carts as $cart)
   @if(Auth::user()->id==$cart->userid)
    <?php $total=$total+$cart->subtotal ?>
    @endif
@endforeach
<h6 class="gr mt-4 text-center">Total: ${{ $total }}</h6>
@if($total>0)
<div class="text-center mt-4">
<a href="{{ route('checkout') }}" class="btn2">Proceed to Checkout <i class="ms-2 fa-solid fa-arrow-right"></i></a>
</div>
@endif

          </div>

        </div>
      </div>
  </section>
</main>

@endsection
