@extends('layout.main')

@section('content')

<main>
  <section class="banner-section ptop100 pbot100 position-relative">
     <div class="overlay"></div>
     <div class="position-absolute top-50 start-50 translate-middle w-100">
       <div id="scene">
<div data-depth="0.2">My first Layer!</div>
<div data-depth="0.6">My second Layer!</div>
</div>
          <div id="particles-js"></div>
          </div>
        <div class="ptop100 pbot100 position-relative z99 slide1">
          <div class="container">

<h1 class="wh">Explore Minimal <span class="d-block pi">Design</span></h1>
<p class="wh mx500 mt-3 pb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
<a href="{{ route('shop') }}" class="btn1">Shop Now <i class="ms-2 fa-solid fa-arrow-right"></i></a>
          </div>

        </div>


  </section>

  <section class="about-section ptop100 pbot100">
       <div class="container">
         <div class="row">
           <div class="col-lg-5 col-md-12">

               <img class="img-fluid" src="./assets/img/ab1.jpg" alt="">



           </div>
           <div class="col-lg-7 col-md-12">
                 <h2 class="gr">We Provide Look And <span class="d-block">Accuracy</span></h2>
                 <p class="bl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                 <div class="d-flex justify-content-lg-between justify-content-center flex-wrap">
                    <div class="card border-0 p-4 text-center">
                         <h4 class="bl">35</h4>
                         <p>Awards Gains</p>
                    </div>
                    <div class="card border-0 p-4 text-center">
                         <h4 class="bl">15K</h4>
                         <p>Quality Products</p>
                    </div>
                    <div class="card border-0 p-4 text-center">
                         <h4 class="bl">2k</h4>
                         <p>Happy Customers</p>
                    </div>

                 </div>
           </div>

         </div>

       </div>
  </section>

  <section class="latest-section ptop100 pbot100 bbl-005">
    <div class="container">
      <h2>Latest Arrivals</h2>
      <div class="owl-carousel mt-4 owl890">
         @foreach($prods as $prod)
         <div>
           <div class="card border-0 positon-relative p-2">
              <?php $img_id = explode(',', $prod->img); ?>
              <img src="./assets/img/products/{{ $img_id[0] }}" alt="">
                <div class=" position-absolute top-50 start-50 translate-middle w-100 text-center">
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

         </div>
         @endforeach

       </div>
    </div>


  </section>

  <section class="about-section-2 ptop100 pbot100">
      <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
              <h2 class="gr">We Provide You The Best Experience</h2>
              <p class="bl mt-4 mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <ul class="list-unstyled">
                <li class="d-flex align-items-center"><i class="fa-solid fa-couch pi me-3 "></i> Minimalistic Design</li>
                <li class="d-flex align-items-center"><i class="fa-solid fa-leaf pi me-3 "></i> Natural Product</li>
                <li class="d-flex align-items-center"><i class="fa-solid fa-tree pi me-3 "></i> Best Quality Wood</li>
              </ul>
            </div>
            <div class="col-lg-5 col-md-12">
                  <div class="position-relative">
                    <img class="img-fluid" src="./assets/img/vv.jpg" alt="">
                  

                  </div>

            </div>
        </div>
      </div>
  </section>



  <section class="latest-section ptop100 pbot100 bbl-005">
    <div class="container">
      <h2 class="text-center">Our Popular Items</h2>

     <div class="d-flex justify-content-center flex-wrap">
       @foreach($prods as $prod)
       <div class="card border-0 positon-relative p-2 m-3">
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

    </div>


  </section>



  <section class="latest-section ptop100 pbot100">
    <div class="container">
      <h2>What Our Clients Say</h2>
      <div class="owl-carousel mt-4 owl8902">
         <div>
            <div class="card reviews border-0 positon-relative p-3">
                 <i class="fa-solid fa-quote-left fs-2 gr"></i>
                 <p class="bl mt-3 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                 <div class="d-flex align-items-center">
                    <i class="fa-solid fa-star pi"></i>
                    <i class="fa-solid fa-star pi"></i>
                    <i class="fa-solid fa-star pi"></i>
                    <i class="fa-solid fa-star pi"></i>
                    <i class="fa-solid fa-star pi"></i>
                 </div>
                 <p class="mt-4 mb-0"><b>Cathy Hicks</b></p>
                 <p class="fs14 mb-0">Web developer</p>

            </div>
         </div>
         <div>
           <div class="card reviews border-0 positon-relative p-3">
                <i class="fa-solid fa-quote-left fs-2 gr"></i>
                <p class="bl mt-3 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="d-flex align-items-center">
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                </div>
                <p class="mt-4 mb-0"><b>Cathy Hicks</b></p>
                <p class="fs14 mb-0">Web developer</p>

           </div>
          </div>
         <div>
           <div class="card reviews border-0 positon-relative p-3">
                <i class="fa-solid fa-quote-left fs-2 gr"></i>
                <p class="bl mt-3 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="d-flex align-items-center">
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                </div>
                <p class="mt-4 mb-0"><b>Cathy Hicks</b></p>
                <p class="fs14 mb-0">Web developer</p>

           </div>
          </div>
         <div>
           <div class="card reviews border-0 positon-relative p-3">
                <i class="fa-solid fa-quote-left fs-2 gr"></i>
                <p class="bl mt-3 mb-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="d-flex align-items-center">
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                   <i class="fa-solid fa-star pi"></i>
                </div>
                <p class="mt-4 mb-0"><b>Cathy Hicks</b></p>
                <p class="fs14 mb-0">Web developer</p>

           </div>
          </div>



       </div>
    </div>


  </section>



  <section class="latest-section ptop100 pbot100 bbl-005">
    <div class="container">
      <h2 class="text-center">News & Updates</h2>

     <div class="d-flex justify-content-center flex-wrap">
       @foreach($blogs as $blog)
       <div class="card border-0 positon-relative p-2 m-3">
          <a href="#"><img src="./assets/img/blog/{{ $blog->img }}" alt=""></a>

           <div class="content text-center pb-4">
               <h6 class="bl mt-3 mb-3">{{$blog->title}}</h6>
               <a href="{{ route('blogs.show', $blog->id) }}" class="btn1">Read More  <i class="ms-2 fa-solid fa-arrow-right"></i> </a>
           </div>
       </div>
       @endforeach




     </div>

    </div>


  </section>

  <section class="offer-section ptop100 pbot100">
     <div class="overlay">

     </div>
     <div class="position-relative z99 text-center">
<h2 class="wh mb-5">Get 10% Off In Your <br> Fast Order</h2>
<a href="{{ route('shop') }}" class="btn2">Shop Now <i class="ms-2 fa-solid fa-arrow-right"></i> </a>
     </div>

  </section>

</main>
@endsection
