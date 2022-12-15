@extends('layout.main')

@section('content')
<section class="ptop100 pbot100">
  <div class="container">
      <h2 class="text-capitalize mb-3">{{  $sblog->title }}</h2>
      <span class="bpi p-2 rounded-pill text-white mb-3">{{ $sblog->created_at }}</span>
      <img class="img-fluid mt-4 rounded-3" src="{{ asset('assets/img/products/'.$sblog->img )}}" alt="">
      <div class="mt-4">
        <?php $cont=html_entity_decode(htmlspecialchars_decode($sblog->desc));

        ?>
        {!! $cont !!}
       
      </div>

  </div>

</section>


@endsection
