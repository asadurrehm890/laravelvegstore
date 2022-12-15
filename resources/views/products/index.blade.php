@extends('admin.main')

@section('content')

<a href="{{ route('products.create') }}" class="btn btn-dark mb-4">Add Product</a>
<table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">img</th>
      <th scope="col">name</th>
      <th scope="col">price</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($prods as $prod)
    <tr>
      <th scope="row">{{ $prod->id }}</th>
      <?php $img_id = explode(',', $prod->img); ?>
      <td> <img class="img-fluid" style="max-width:50px" src="{{ asset('assets/img/products/'.$img_id[0]) }}" alt=""> </td>
      <td>{{ $prod->name }}</td>
      <td>{{ $prod->price }}</td>
      <td>

         <form class="" action="{{ route('products.destroy', $prod->id) }}" method="post">
            @csrf
            @method('DELETE')
            <a href="{{ route('products.edit',$prod->id ) }}" class="btn btn-dark mx-1">Edit</a>
            <button type="submit" class="btn btn-danger mx-1" name="button">Delete</button>
         </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
