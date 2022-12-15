<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTER</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')  }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/admin.css') }}">
  </head>
  <body>
    <section class="admin-section">
       <div class="container-fluid">
             <h1 class="bg-dark p-4 text-center text-white">Registeration</h1>

             <div class="card p-4 mx-auto mt-5" style="max-width:600px; width:100%;">

                 <form class="" action="{{ route('newuser') }}" method="post">
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

                      <button type="submit" name="button" class="btn btn-dark">Register</button>
                 </form>
                 <p class="text-center"><a href="{{ route('login') }}" class="btn btn-link">Already an Account click here</a></p>
                             </div>

       </div>
    </section>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
  </body>
</html>
