<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/admin.css') }}">
  </head>
  <body>
    <section class="admin-section">
       <div class="container-fluid">

          <div class="row">
             <div class="col-12">
                 <h1 class="w-100 text-center p-4 bg-dark text-white rounded-3">Dashboard</h1>
             </div>
             <div class="col-lg-4 col-md-4 col-sm-12">
               <div class="d-grid gap-2">
                 <a href="{{ route('products.index') }}" class="btn btn-dark text-center">Products</a>
                 <a href="{{ route('blogs.index') }}" class="btn btn-dark text-center">Blogs</a>
                 <a href="{{ route('conts') }}" class="btn btn-dark text-center">Contacts</a>
                 <a href="{{ route('disporders') }}" class="btn btn-dark text-center">Orders</a>
               </div>

             </div>
             <div class="col-lg=8 col-md-8 col-sm-12">
                  @yield('content')
             </div>
          </div>
       </div>
    </section>
      <script src="{{ asset('assets/bootstrap/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>

  </body>
</html>
