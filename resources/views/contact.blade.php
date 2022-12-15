@extends('layout.main')

@section('content')

<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">Contact Us</h2>
         <p class="wh"><a href="{{ route('home') }}" class="wh">Home</a> / contact </p>
      </div>

  </section>

  <section class="ptop100 pbot100">
    @if(session('cmess'))
       <p class="p-2 text-center bgr text-white">{{ session('cmess') }}</p>
    @endif
      <div class="container">
         <div class="row">
             <div class="col-lg-7 col-md-12 col-sm-12 mobcenter">
                 <form class="" action="{{ route('storecont') }}" method="post">
                   @csrf
                     <label for="" class="form-label w-100">Name
                         <input type="text" class="form-control" name="cname" value="">
                     </label>
                     <label for="" class="form-label w-100">Email
                         <input type="email" class="form-control" name="cemail" value="">
                     </label>
                     <label for="" class="form-label w-100">Message
                       <textarea name="cmessage" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                     </label>
                     <button type="submit" class="btn1 border-0" name="btn1">Contact <i class="ms-2 fa-solid fa-arrow-right"></i></button>
                 </form>
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12">
                   <div class="card border-0 text-center p-2">
                        <i class="fas fa-envelope fs-1 gr"></i>
                        <p class="bl mt-2">support@comfortsofa.com</p>
                   </div>
                   <div class="card border-0 text-center p-2">
                        <i class="fas fa-phone-alt fs-1 gr"></i>
                        <p class="bl mt-2">012-90909090</p>
                   </div>
                   <div class="card border-0 text-center p-2">
                        <i class="fas fa-map-marker-alt fs-1 gr"></i>
                        <p class="bl mt-2">12 office, blue plaza, 6 street, B Area, taxila, Pakistan</p>
                   </div>
             </div>
         </div>
      </div>
  </section>
  <section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106154.67628248957!2d72.76817242499618!3d33.75204345734218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfa4180e193fcd%3A0x825749538d73641e!2sTaxila%2C%20Rawalpindi%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1659682550784!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

</main>

@endsection
