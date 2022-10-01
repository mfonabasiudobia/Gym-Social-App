<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 
    {{-- <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}"> --}}
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" >
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset("css/style.css")}}?v={{uniqid()}}">

    @stack('header')

  @livewireStyles
  
</head>
<body>
     
   
  <div class="page-wrapper">
    <div class="row">
      <div class="col-12  text-center d-flex justify-content-center flex-column align-items-center" style="min-height: 100vh;">
          <div class="text-danger"><h1 class="fw-800">404</h1></div>
          <div class="text-danger">Oop! Something is wrong. <a href="{{route('home')}}" class="fw-800 text-danger">GO TO HOME PAGE</a></div>
      </div>
  </div>
  </div>


 </body>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
 <script src="{{asset('js/app.js') }}" defer></script>
@livewireScripts


</body>
</html>