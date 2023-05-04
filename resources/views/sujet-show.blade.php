@extends('layouts.layout')
@section('content')

<div class="p-5">
    @include('partials.menu')
    <div class="cardBox bg-white  text-center flex justify-around mx-auto my-5 md:mx-5 flex-col  md:flex-wrap md:flex-row px-2 py-5">

@forelse($sujets as $sujet)
<div style="min-width: 230px; height:170px;overflow:hidden;"  class="card m-2 shadow rounded ">   
<div style="min-height: 50px;" class="hearder flex flex-col items-center   opacity-1 bg-purple-900">
<h3 style="line-height:50px" class="text-center   font-bold uppercase text-white"> {{str_replace('_',' à ',$sujet->title)}}</h3>
</div>
<ul class="font-bold px-5 pt-1">
   <li class="mt-1"> UE: {{str_replace('_',' ',$sujet->ue)}}</li>
   <li class="mt-1">NIVEAU: {{$sujet->niveau}}</li>
   <li class=" mt-3 text-center "><a class="btn-dark bg-gray-900 rounded hover:shadow-md" href="{{route('compo',['title'=>$sujet->title,'id'=>$sujet->id])}}">Voir sujet</a><li>

         
</ul>
</div>
@empty

<div class="p-5  text-red-300 text-center">
   Aucun resultat
</div>
@endforelse

    

</div>
</div>

@endsection