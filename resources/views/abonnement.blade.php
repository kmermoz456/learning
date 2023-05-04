@extends('layouts.layout')

@section('content')
<div style=" min-height:500px; top:10px" class="  relative m-5 p-5 bg-gray-100">
<div class="p-5 shadow-lg rounded">
    <h1 class="text-center text-purple-900  text-2xl uppercase font-bold">Bienvenu sur la page d'abonnement</h1>
    <p class="mt-2">L'abonnement en ligne n'étant pas possible (bientôt), pour votre abonnement veillez  contacter l'étudiant K.KOUAME MERMOZ</p>
    <ul>
        <li class="font-bold">Me contacter</li>
        <li><i class="bi bi-phone"></i>07 87 12 44 76</li>
        <li><i class="bi bi-phone"></i>05 94 24 55 11 </li>

    </ul>
    ou envoyer un message
</p>
</div>
<p class="text-center my-5"><a class="btn-color rounded" href="{{Route('index')}}">Retour à la page d'accueil</a></p>
</div>

@endsection