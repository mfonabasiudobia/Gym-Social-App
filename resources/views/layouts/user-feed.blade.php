<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gym Fiting Website</title>
 
   <link rel="shortcut icon" href="{{asset('images/logo.svg')}}" type="image/x-icon">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/confetti.css"> --}}
    <link rel="stylesheet" href="{{asset("css/app.css")}}?v={{uniqid()}}">

    @stack('header')

    @livewireStyles
    @powerGridStyles
</head>
<body>
   

<page-wrapper x-data class="bg-light">
    {{$slot}}
</page-wrapper>
    
<script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" ></script>
<script defer src="{{asset('js/js.js')}}?v={{uniqid()}}"></script>

@stack("script")
@livewireScripts
@powerGridScripts

</body>
</html>