@extends('admin.main')

@section('content')

<form class="" action="{{ route('blogs.store') }}" method="post">
  @csrf
  <label for="" class="form-label w-100">Title
  <input type="text" name="title" value="" class="mb-3 form-control">
  </label>
  <label for="" class="form-label w-100">Content
  <textarea name="content" rows="10" cols="80" class="mb-3 form-control"></textarea>
  </label>
  <label for="" class="form-label w-100">Img
  <input type="file" name="img" value="" class="form-control mb-3">
  </label>
  <button type="submit" name="button" class="btn btn-dark d-block">Create</button>
</form>

@endsection
