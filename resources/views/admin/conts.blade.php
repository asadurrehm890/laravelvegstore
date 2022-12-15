@extends('admin.main')

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>



    </tr>
  </thead>
  <tbody>
    @foreach($ac as $a)
    <tr>
      <th scope="row">{{ $a->id }}</th>
      <td>{{ $a->name }}</td>
      <td>{{ $a->email }}</td>
      <td>{{ $a->messsage }}</td>



    </tr>
    <tr>


    @endforeach

      </tbody>
</table>

@endsection
