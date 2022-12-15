@extends('admin.main')

@section('content')

<form class="" action="{{ route('products.update', $proup->id) }}" method="post">
  @csrf
  @method('PUT')
   <label for="" class="form-label w-100">
      Name
      <input type="text" class="form-control mb-2" name="prname" value="{{ $proup->name }}">
   </label>
   <label for="" class="form-label w-100">
      Price
      <input type="text" class="form-control mb-2" name="prprice" value="{{ $proup->price }}">
   </label>
   <label for="" class="form-label w-100">
      weight (Separated by commas ',')
      <input type="text" class="form-control mb-2" name="prweight" value="{{ $proup->weight }}">
   </label>
   <label for="" class="form-label w-100">
      Description
      <textarea name="prdesc" class="form-control mb-2" rows="8" cols="80">
         {{ $proup->description }}
      </textarea>
   </label>
   <label for="" class="form-label w-100">
      Select product image
      <input type="file" class="form-control mb-2" name="primg" value="">
      <input type="file" class="form-control mb-2" name="primg1" value="">
      <input type="file" class="form-control mb-2" name="primg2" value="">
      <input type="file" class="form-control mb-2" name="primg3" value="">
   </label>
   <button type="submit" name="button" class="btn btn-dark">update</button>
</form>


@endsection
