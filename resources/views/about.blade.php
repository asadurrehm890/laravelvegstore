@extends('layout.main')

@section('content')

<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">About</h2>
         <p class="wh"><a href="{{ route('home') }}" class="wh">Home</a> / about </p>
      </div>

  </section>
  <section class="about-section ptop100 pbot100">
       <div class="container">
         <div class="row">
           <div class="col-lg-5 col-md-12">

               <img  class="img-fluid" src="./assets/img/ab1.jpg" alt="">


           </div>
           <div class="col-lg-7 col-md-12">
                 <h2 class="gr">We Provide Look And <span class="d-block">Accuracy</span></h2>
                 <p class="bl">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                 <ul class="list-unstyled">
                   <li>Chairs</li>
                   <li>Beds</li>
                   <li>Tables</li>
                   <li>Sofas</li>
                   <li>Dinner Table</li>
                 </ul>
                 <p class="bl">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

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

</main>
@endsection
