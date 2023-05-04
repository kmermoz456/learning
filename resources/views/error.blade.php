<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EU | {{str_replace('_',' ',$sujet->title ?? 'Composition')}}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">


@livewireStyles       
    </head>

<body style="font-family: arial;" class="bg-gray-200 px-5">
    
<div class="my-2">
    <div class="flex justify-center">
<div style="width: 400px; height:300px" class="mx-auto p-5 rounded shadow-md bg-white ">
                       <h1 class="text-center text-3xl font-bold my-5">NOTE</h1>
    <p class="text-center">@if($note < $total/2)<span style="font-size:50px" class=" text-red-900" >{{$note}}</span> 
        @else   <span style="font-size:50px" class=" text-green-900" >{{$note}}</span>@endif
        /{{$total}}</p>

        <p class="text-center font-bold text-2xl">faute : <span class="text-red-900"> {{count($questions)}} </span></p>
</div>
</div>
</div>
<div class="flex flex-col justify-center">
@if($questions)
@foreach($questions as $question)
<hr>
<div class="bg-white rounded p-3">
    <h2 class="text-gray-900 font-bold">{{$question->content}}</h2>
    <ul>
        @if($question->type == "QCM")
    @foreach($question->propos as $pkey=> $propo)
    <li class="font-bold {{$propo->point == '0' ? 'text-gray-900' :'text-green-700'}}">{{$propo->content}}
    @if($propo->point) <i class="bi font-bold text-green-900 bi-check-circle"></i> 
     @else <i class="bi text-red-900 bi-x-circle"></i> 
      @endif   
    </li>
    @endforeach
    @else
    @if($question->good_ans == "0")
    <li class=""><label> vrai <i class="bi text-red-900 bi-x-circle"></i> </label></li>
    <li class="">faux <i class="bi font-bold text-green-900 bi-check-circle"></i></li>
    @else
    <li class="">vrai <i class="bi font-bold text-green-900 bi-check-circle"></i></li>
    <li class="">faux <i class="bi text-red-900 bi-x-circle"></i> </li>
    @endif
    
    @endif
    </ul>
</div>
@endforeach
@endif
</div>
<p class="text-center my-5"><a href="/sujet" class=" rounded  btn-color">Foire aux questions</a></p>
@livewireScripts
</body>

</html>
