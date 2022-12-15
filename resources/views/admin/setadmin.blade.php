<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/admin/admin.css') }}">
  </head>
  <body>
    <section class="admin-section">
       <div class="container-fluid">
             <h1 class="bg-dark p-4 text-center text-white">Set Admin</h1>

             <div class="card p-4 mx-auto mt-5" style="max-width:600px; width:100%;">

                 <form class="" action="{{ route('setsuperuser') }}" method="post">
                   @csrf
                      <label for="" class="form-label">Name</label>
                      @if($errors->has('rname'))
                          <span class="text-danger d-block">{{ $errors->first('rname') }}</span>
                      @endif
                      <input type="text" name="rname" class="form-control mb-3" value="">
                      <label for="" class="form-label">Email</label>
                      @if($errors->has('remail'))
                          <span class="text-danger d-block">{{ $errors->first('remail') }}</span>
                      @endif
                      <input type="email" name="remail" class="form-control mb-3" value="">
                      <label for="" class="form-label">Password</label>
                      @if($errors->has('rpassword'))
                          <span class="text-danger d-block">{{ $errors->first('rpassword') }}</span>
                      @endif
                      <input type="password" name="rpassword" class="form-control mb-3" value="">

                      <button type="submit" name="button" class="btn btn-dark">Set Admin</button>
                 </form>

                             </div>

       </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
