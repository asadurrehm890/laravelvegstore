<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/admin.css') }}">
  </head>
  <body>
    <section class="admin-section">
       <div class="container-fluid">
             <h1 class="bg-dark p-4 text-center text-white">Login</h1>

             <div class="card p-4 mx-auto mt-5" style="max-width:600px; width:100%;">
                 <form class="" action="{{ route('loginuser') }}" method="post">
                   @csrf
                      <label for="" class="form-label">Email</label>
                      @if($errors->has('email'))
                          <span class="text-danger d-block">{{ $errors->first('rname') }}</span>
                      @endif
                      <input type="email" name="email" class="form-control mb-3" value="">
                      <label for="" class="form-label">Password</label>
                      @if($errors->has('email'))
                          <span class="text-danger d-block">{{ $errors->first('password') }}</span>
                      @endif
                      <input type="password" name="password" class="form-control mb-3" value="">
                      <button type="submit" name="button" class="btn btn-dark">Login</button>
                 </form>
                 <p class="text-center"><a href="{{ route('register') }}" class="btn btn-link">Do not have an Account click here</a></p>
                             </div>

       </div>
    </section>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
    </html>
