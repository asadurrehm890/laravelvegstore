@extends('admin.main')

@section('content')


<form class="" action="{{ route('blogs.update', $eblog->id) }}" method="post">
  @csrf
  @method('PUT')
  <label for="" class="form-label w-100">Title
  <input type="text" name="title" value="{{ $eblog->title }}" class="mb-3 form-control">
  </label>
  <label for="" class="form-label w-100">Content
  <textarea name="content" rows="10" cols="80" class="mb-3 form-control" value="">
    <?php $cont=html_entity_decode(htmlspecialchars_decode($eblog->desc)); ?>
   {{ $cont }}
  </textarea>
  </label>
  <label for="" class="form-label w-100">Img
  <input type="file" name="img" value="{{ $eblog->img }}" class="form-control mb-3">
  </label>
  <button type="submit" name="button" class="btn btn-dark d-block">Create</button>
</form>

@endsection
