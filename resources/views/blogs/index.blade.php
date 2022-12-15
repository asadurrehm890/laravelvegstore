@extends('admin.main')

@section('content')

@if(session('mess'))
<p class="w-100 my-4 p-3 bg-danger text-white">{{ session('mess') }}</p>
   @endif
   @if(session('messup'))
   <p class="w-100 my-4 p-3 bg-success text-white">{{ session('messup') }}</p>
      @endif
<a href="{{ route('blogs.create') }}" class="btn btn-dark">Create New Blog</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">img</th>
      <th scope="col">Title</th>
      <th scope="col">Creted At</th>
      <th scope="col">Actions</th>




    </tr>
  </thead>
  <tbody>
    @foreach($blogs as $blog)
    <tr>
      <th scope="row">{{ $blog->id }}</th>
      <td> <img class="img-fluid " style="max-width:50px" src="{{asset('./assets/img/blog/'.$blog->img)}}" alt=""> </td>
      <td>{{ $blog->title }}</td>
      <td>{{ $blog->created_at }}</td>
      <td>
         <form class="" action="{{ route('blogs.destroy', $blog->id) }}" method="post">
             @csrf
             @method('DELETE')
             <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-dark">Edit</a>
             <button type="submit" name="button" class="btn btn-danger">Delete</button>
         </form>
      </td>
    </tr>


    @endforeach

      </tbody>
</table>

@endsection
