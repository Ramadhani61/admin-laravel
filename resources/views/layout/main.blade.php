<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
      <script src="https://kit.fontawesome.com/0d37066cd1.js" crossorigin="anonymous"></script> 
        <link rel="stylesheet" href="css/style.css">
  
    <title>{{ $title }}</title>
</head>
<body>
     <section class="sec-left d-flex" style="solid red 1px">
    <div class="main-left w-50 h-100 bg-danger">
      <div class="row justify-content-start h-100">
        <div class="col-6" >          
            @include('partial.sidebar')
        </div>
      </div>
    </div>
    <div class="col-6 bg-warning" >
        @yield('content')
    </div>
  </section>
    {{-- <section class="sec-left d-flex" style="solid red 1px">
    <div class="main-left h-100">
      <div class="row justify-content-center h-100">
        <div class="col-6" >          
        </div>
      </div>
    </div>
    <div class="col-2 bg-danger" >
    </div>
</section> --}}
</body>
</html>