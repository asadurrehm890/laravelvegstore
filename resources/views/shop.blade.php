@extends('layout.main')

@section('content')


<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">Shop</h2>
         <p class="wh"><a href="{{ route('home') }}" class="wh">Home</a> / Shop </p>
      </div>

  </section>
  <section class="shop ptop100 pbot100">
      <div class="container">
        <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12">
             @if(session('message'))
 <p class="text-center bpi text-white">{{session('message')}}</p>
              @endif
             <form class="mt-2 position-relative" action="{{ route('search') }}" method="post">
               @csrf
               <input class="bg-transparent py-2 px-3 border w-100" type="text" name="search" value="" placeholder="Search....">
               <div class="position-absolute top-50 end-0 translate-middle-y">
                  <button type="submit" name="button" class="py-2 px-3 border"> <i class="fas fa-search gr"></i> </button>
               </div>

             </form>
               <div class="border-top border-bottom bl pt-3 pb-3">
                  <div class="d-flex justify-content-between align-items-center">
                      <p class="bl mb-0">Showing 1-{{ count($prods) }} of {{ count($prods) }} results</p>
                      <select class="sorting border-0 bg-transparent" name="sorting" onchange="location = this.value;">
                        <option value="{{ route('shop') }}" @if(Route::is('shop')) selected @endif>Latest Products</option>
                        <option value="{{ route('shop1') }}" @if(Route::is('shop1')) selected @endif>Low to High price</option>
                        <option value="{{ route('shop2') }}" @if(Route::is('shop2')) selected @endif>High to Low price</option>

                      </select>
                  </div>
               </div>

               <section class="shop-latest-section pt-5 pb-5 ">



                  <div class="d-flex justify-content-center justify-content-md-between flex-wrap">
              @foreach($prods as $prod)
                  <div class="card border-0 positon-relative p-2">
                      <?php $img_id = explode(',', $prod->img); ?>
                      <img src="./assets/img/products/{{ $img_id[0] }}" alt="">
                        <div class="position-absolute top-50 start-50 translate-middle w-100 text-center">

                          <form class="" action="{{ route('storewishlist') }}" method="post">
                              @csrf
                              <input type="hidden" name="cname" value="{{ $prod->name }}">
                              <input type="hidden" name="cprice" value="{{ $prod->price }}">
                              <input type="hidden" name="cdesc" value="{{ $prod->description }}">
                              <input type="hidden" name="cimg" value="{{ $img_id[0] }}">
                              <input type="hidden" name="cpid" value="{{ $prod->id }}">
                              <button type="submit" name="button" class="border-0 rounded-circle bgr p-2 m-2 w40 h40 d-inline-block text-center"><i class="fa-solid fa-heart wh"></i></button>

                          </form>
                          <form class="" action="{{ route('carts.store') }}" method="post">
                              @csrf
                              <input type="hidden" name="cname" value="{{ $prod->name }}">
                              <input type="hidden" name="cprice" value="{{ $prod->price }}">
                              <input type="hidden" name="cdesc" value="{{ $prod->description }}">
                              <input type="hidden" name="cimg" value="{{ $img_id[0] }}">
                              <input type="hidden" name="cpid" value="{{ $prod->id }}">
                              <button type="submit" name="button" class="border-0 rounded-circle bpi p-2 m-2 w40 h40 d-inline-block text-center"><i class="fa-solid fa-cart-shopping wh"></i></button>

                          </form>


                          <a href="{{ route('products.show', $prod->id) }}" class="rounded-circle bgr p-2 m-2 w40 h40 d-inline-block text-center"><i class="fa-solid fa-eye wh"></i></a>

                        </div>
                        <div class="mt-3  d-flex justify-content-between align-items-center flex-wrap">
                            <p class="bl">{{ $prod->name }}</p>
                            <p class="gr">${{ $prod->price }}</p>
                        </div>
                    </div>
                @endforeach

                  </div>




               </section>




           </div>


        </div>
      </div>
  </section>
</main>

@endsection
