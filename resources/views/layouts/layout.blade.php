<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-icons/font/bootstrap-icons.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/navbar.css')}}">
        <link rel="icon" href="{{asset('images/logo.png')}}"/>

        @livewireStyles

</head>

<body>
    
@yield('content')



@include('partials.footer')
<script>
function dropdown()
{
  let element = document.querySelector('.dropdown');
              element.childNodes[4].classList.toggle('hidden');
              element.childNodes[2].classList.toggle('bi-chevron-down') 
              element.childNodes[2].classList.toggle('bi-chevron-up') 


              
}

function menu()
{
    let element2 = document.querySelector('.mobile-menu')
    let element3 = document.querySelector('.menu-btn')
    element3.childNodes[1].classList.toggle('bi-menu-button-wide-fill')
    element3.childNodes[1].classList.toggle('bi-x-square')
     element2.classList.toggle('hidden');
           
}
function mobile()
{
let element1 = document.querySelector(' .chevron')
let element2 = document.querySelector('.menu-mobile')

            element2.classList.toggle('hidden');
            element1.childNodes[1].classList.toggle('bi-chevron-down')
            element1.childNodes[1].classList.toggle('bi-chevron-up')

           

}
</script>
@livewireScripts
    </body>
</html>
