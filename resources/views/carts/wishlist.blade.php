@extends('layout.main')

@section('content')

<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">Wishlist</h2>
         <p class="wh"><a href="{{ route('shop') }}" class="wh">shop</a> / wishlist </p>
      </div>

  </section>

  <section class="ptop100 pbot100">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 mobcenter">
              <h2>Wishlist Items</h2>
              <div class="d-none d-md-block">


              <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Img</th>
      <th scope="col">Name</th>
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

      <td class="text-center price">${{ $cart->price }}</td>
      <td class="text-center">
        <form class="" action="{{ route('delwishlist') }}" method="post">
          @csrf
              <input type="hidden" name="wid" value="{{ $cart->id }}">
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
        <form class="" action="{{ route('delwishlist') }}" method="post">
          @csrf
              <input type="hidden" name="wid" value="{{ $cart->id }}">
              <button class="text-danger border-0 bg-transparent"><i class="fa-solid fa-xmark"></i></button>
        </form>
        <div class="text-center p-4">
          <img class="img-fluid wh50" src="./assets/img/products/{{ $cart->img }}" alt="">
          <h6 class="my-2">{{ $cart->name }}</h6>
          <p class="d-block">${{ $cart->price }}</p>

        </div>

      </div>
      @endif
      @endforeach
      </div>


          </div>

        </div>
      </div>
  </section>
</main>

@endsection
