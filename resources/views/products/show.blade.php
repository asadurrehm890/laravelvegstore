@extends('layout.main')

@section('content')

<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">Shop</h2>
         <p class="wh"><a href="{{ route('shop') }}" class="wh">shop</a> / product </p>
      </div>

  </section>

  <section class="detail-product ptop100 pbot100">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-12 col-sm-12 mobcenter">
       <?php $img_id = explode(',', $single->img); ?>
              <img class="img-fluid g1" src="{{ asset('/assets/img/products/'.$img_id[0]) }}" alt="">
              <div class="row mt-3 ">
                <div class="col-3">
                  <img class="img-fluid wh50" src="{{ asset('/assets/img/products/'.$img_id[0]) }}" alt="">
                </div>
                <div class="col-3">
                  <img class="img-fluid wh50" src="{{ asset('/assets/img/products/'.$img_id[1]) }}" alt="">
                </div>
                <div class="col-3">
                  <img class="img-fluid wh50" src="{{ asset('/assets/img/products/'.$img_id[2]) }}" alt="">
                </div>
                <div class="col-3">
                  <img class="img-fluid wh50" src="{{ asset('/assets/img/products/'.$img_id[3]) }}" alt="">
                </div>
              </div>

        </div>
        <div class="col-lg-7 col-md-12 col-sm-12 mobcenter">
                <h2>{{$single->name}}</h2>
                <h4 class="gr mt-3">${{$single->price}}</h4>
                <div class="d-flex mt-3 justify-content-between mx150">
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                  <i class="fas fa-star text-warning"></i>
                </div>
                <p class="mt-3">{{$single->description}}</p>
                <h6 class="mt-3">Colors</h6>
                 <?php $colors = explode(',', $single->colors); ?>
                <div class="swatches mt-2">

                  <a href="#" class="me-2"> <span style="background-color:{{$colors[0]}}"></span> </a>
                  <a href="#" class="me-2"> <span style="background-color:{{$colors[1]}}"></span> </a>


                </div>
                <h6 class="mt-3">Quantity: 1</h6>

                <form class="mt-3" action="{{ route('carts.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="cname" value="{{ $single->name }}">
                    <input type="hidden" name="cprice" value="{{ $single->price }}">
                    <input type="hidden" name="cdesc" value="{{ $single->description }}">
                    <input type="hidden" name="cimg" value="{{ $img_id[0] }}">
                    <input type="hidden" name="cpid" value="{{ $single->id }}">
                    <button type="submit" name="button" class="btn1 border-0 d-block mt-3">Add to Cart <i class="ms-2 fa-solid fa-arrow-right"></i></button>

                </form>

                <form class="mt-3" action="{{ route('storewishlist') }}" method="post">
                    @csrf
                    <input type="hidden" name="cname" value="{{ $single->name }}">
                    <input type="hidden" name="cprice" value="{{ $single->price }}">
                    <input type="hidden" name="cdesc" value="{{ $single->description }}">
                    <input type="hidden" name="cimg" value="{{ $img_id[0] }}">
                    <input type="hidden" name="cpid" value="{{ $single->id }}">
                    <button type="submit" name="button" class="btn2 border-0 mt-3">Add to whishlist <i class="ms-2 fa-solid fa-arrow-right"></i></button>

                </form>

        </div>
      </div>
    </div>
  </section>
  <section class="latest-section ptop100 pbot100 bbl-005">
    <div class="container">
      <h2>Related Products</h2>
      <div class="owl-carousel mt-4 owl890">

        @foreach($prods as $prod)
        @if($prod->id!=$single->id)
        <?php $img_id = explode(',', $prod->img); ?>
         <div>
            <div class="card border-0 positon-relative p-2">
              <img src="{{ asset('assets/img/products/'.$img_id[0]) }}" alt="">
                <div class="position-absolute top-50 start-50 translate-middle w-100 text-center">
                  <a href="#whishlist" class="rounded-circle bgr p-2 m-2 w40 h40 d-inline-block text-center"><i class="fa-solid fa-heart wh"></i></a>
                  <a href="#cart" class="rounded-circle bpi p-2 m-2 w40 h40 d-inline-block text-center"><i class="fa-solid fa-cart-shopping wh"></i></a>
                  <a href="{{ route('products.show', $prod->id) }}" class="rounded-circle bgr p-2 m-2 w40 h40 d-inline-block text-center"><i class="fa-solid fa-eye wh"></i></a>
                </div>
                <div class="mt-3  d-flex justify-content-between align-items-center flex-wrap">
                    <p class="bl">{{ $prod->name }}</p>
                    <p class="gr">${{ $prod->price }}</p>
                </div>
            </div>
         </div>
         @endif
        @endforeach


    </div>


  </section>

</main>
@endsection
