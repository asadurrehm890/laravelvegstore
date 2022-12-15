<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Grocer Store</title>
    <link rel="stylesheet" href="{{ asset('assets/fonts/stylesheet.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl/dist/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
  </head>
  <body>
    <header class="position-relative">
      <nav class="navbar-dark navbar navbar-expand-lg bgr">
 <div class="container-fluid">
   <a class="navbar-brand" href="#"><img class="mx50" src="./assets/img/logo.png" alt=""></a>
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
         <a class="nav-link
         @if(Route::is('home')) active  @endif" aria-current="page" href="{{ route('home') }}">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link @if(Route::is('about')) active  @endif" href="{{ route('about') }}">About</a>
       </li>
       <li class="nav-item">
         <a class="nav-link @if(Route::is('shop')) active  @endif" href="{{ route('shop') }}">Shop</a>
       </li>
       <li class="nav-item">
         <a class="nav-link @if(Route::is('blog')) active  @endif" href="{{ route('blog') }}">Blog</a>
       </li>
       <li class="nav-item">
         <a class="nav-link @if(Route::is('contact')) active  @endif" href="{{ route('contact') }}">Contact</a>
       </li>
     </ul>
     <div class="d-flex">
       @if (Auth::check())
       <span class="fs-4 ms-4 pi"><i class="fas fa-user"></i><span class="text-white ms-2 fs-6">{{ Auth::user()->name }}</span></span>
       @else
       <a  class="fs-4 ms-4 pi" href="{{ route('register') }}"><i class="fas fa-user"></i><span class="text-white ms-2 fs-6">Register</span></a>
       @endif
       <a class="fs-4 ms-4 pi" href="{{ route('wishlist') }}"><i class="fas fa-heart"></i></a>

       <a class="fs-4 ms-4 pi positon-relative" href="{{ route('carts.index') }}"><i class="fa-solid fa-cart-shopping"></i></a>
     </div>

   </div>
 </div>
</nav>
    </header>



@yield('content')

    <footer class="ptop100 pb-4 bgr">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12">
                  <img class="mx75" src="./assets/img/logo.png" alt="">
                  <p class="wh mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
                  <div class="d-flex justify-content-between align-items-center mx150">
                    <a href="#" class="wh"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="wh"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="wh"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="wh"><i class="fab fa-instagram"></i></a>
                  </div>
             </div>


             <div class="col-lg-6 col-md-6 col-sm-12">
                    <h5 class="wh fs-5">News Leter</h5>
                    <p class="wh mt-4">Join Our Mailing List For Latest Product Updates</p>

                    <form class="mt-4 position-relative" action="index.html" method="post">
                      <input class="bg-transparent py-2 px-3 border w-100" type="email" name="email" value="">
                      <div class="position-absolute top-50 end-0 translate-middle-y">
                         <button type="submit" name="button" class="py-2 px-3 border">Subscibe</button>
                      </div>

                    </form>
             </div>
          </div>

       </div>

       <div class="copyright mt-5 pt-4 border-top">
         <div class="container">
           <div class="d-flex justify-content-lg-between justify-content-center flex-wrap">
             <p class="wh">Copyright <i class="fas fa-copyright"></i> Furniture Builder. All Right Reserved</p>
             <div class="right">
               <a href="#" class="wh me-4">Privacy Policy</a>
                <a href="#" class="wh">Term & Condition</a>
             </div>
           </div>

         </div>

       </div>
    </footer>
     <button onclick="topFunction()" id="myBtn" class="btn2 rounded-circle wh20" title="Go to top"> ^ </button>
    <script src="{{ asset('assets/jq.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/owl/dist/owl.carousel.min.js') }}" charset="utf-8"></script>
    <script src="{{ asset('assets/particles/particles.min.js') }}" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="{{ asset('assets/main.js') }}" charset="utf-8"></script>


  </body>
</html>
