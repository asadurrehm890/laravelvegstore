@extends('layout.main')

@section('content')
<main>
  <section class="innerbanner ptop100 pbot100">
      <div class="overlay"></div>
      <div class="container text-center ptop100">
         <h2 class="wh">Blogs</h2>
         <p class="wh"><a href="{{ route('home') }}" class="wh">Home</a> / Blogs </p>
      </div>

  </section>
  <section class="latest-section ptop100 pbot100 bbl-005">
    <div class="container">


     <div class="d-flex justify-content-center flex-wrap">

@foreach($blogs as $blog)
       <div class="card border-0 positon-relative p-2 m-3">
          <a href="#"><img src="{{ asset('assets/img/blog/'.$blog->img) }}" alt=""></a>

           <div class="content text-center pb-4">
               <h6 class="bl mt-3 mb-3">{{ $blog->title }}</h6>
               <a href="{{ route('blogs.show', $blog->id) }}" class="btn1">Read More  <i class="ms-2 fa-solid fa-arrow-right"></i> </a>
           </div>
       </div>

@endforeach





     </div>

    </div>


  </section>
</main>

@endsection
