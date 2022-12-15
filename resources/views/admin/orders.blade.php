@extends('admin.main')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">userid</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Country</th>
      <th scope="col">Address</th>
      <th scope="col">Zip</th>

      <th scope="col">Total</th>

    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <th scope="row">{{ $order->id }}</th>
      <td>{{ $order->userid }}</td>
      <td>{{ $order->name }}</td>
      <td>{{ $order->email }}</td>
      <td>{{ $order->phone }}</td>
      <td>{{ $order->country }}</td>
      <td>{{ $order->Address }}</td>
      <td>{{ $order->zip }}</td>

      <td>{{ $order->total }}</td>
    </tr>
    <tr>
      <td colspan="9">
        <span>/id/</span>
        <span>name/</span>
        <span>quantity/</span>
         <span>price/</span>




      </td>
    </tr>
    <tr>
      <td colspan="9">
        <?php $prod_arr = explode(';', $order->prods); ?>


           @foreach($prod_arr as $ar)
               <span>{{ $ar }}/</span>
           @endforeach

      </td>
    </tr>
    @endforeach

      </tbody>
</table>

@endsection
