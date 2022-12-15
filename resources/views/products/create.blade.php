@extends('admin.main')

@section('content')

<form class="" action="{{ route('products.store') }}" method="post">
  @csrf
   <label for="" class="form-label w-100">
      Name
      <input type="text" class="form-control mb-2" name="prname" value="">
   </label>
   <label for="" class="form-label w-100">
      Price
      <input type="text" class="form-control mb-2" name="prprice" value="">
   </label>
   <label for="" class="form-label w-100">
      Weight (Separated by commas ',')
      <input type="text" class="form-control mb-2" name="prweight" value="">
   </label>
   <label for="" class="form-label w-100">
      Description
      <textarea name="prdesc" class="form-control mb-2" rows="8" cols="80"></textarea>
   </label>
   <label for="" class="form-label w-100">
      Select product images
      <input type="file" class="form-control mb-2" name="primg" value="">
      <input type="file" class="form-control mb-2" name="primg1" value="">
      <input type="file" class="form-control mb-2" name="primg2" value="">
      <input type="file" class="form-control mb-2" name="primg3" value="">
   </label>
   <button type="submit" name="button" class="btn btn-dark">Add</button>
</form>

@endsection
