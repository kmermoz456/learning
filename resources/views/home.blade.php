@extends('layouts.layout')

@section('content')
<div class="p-5 section-one ">
   @include('partials.menu')

    <div class="banner p-5 mt-5 w-full md:flex flex-col md:flex-row">
        <div class="banner-1">
            <h1 class="text-center text-1xl md:text-left"><span> Apprendre </span>  plus <br> en ligne</h1>
            <p class="text text-center md:text-left ">Bienvenu sur E-learninguna <br> une platforme qui met à votre disposition des QCM et QCD intéractif,
             pour vous permettre de bien réviser vos cours en fin de bien vous preparer aux examens </p>
  <div class="mt-5 flex flex-col md:flex-row">
     @guest <a style="font-family: Arial;" class=" mx-2  hover:shadow-lg btn-color rounded   font-bold " href="login">Créer votre compte</a> @endguest
      <a style="font-family: Arial;" class="mx-2  mt-2 hover:shadow-lg btn-white rounded font-bold  " href="/sujet">Voir QCM</a>
</div>

        </div>
        <div class="banner-2 show">
        <img width="600"  src="{{asset('images/elearning.png')}}" alt="logo"/>
       
        </div>
    </div>

</div>
<div class="mt-2">
    <h2 class="text-center font-bold text-2xl">Pourquoi E-learninguna</h2>
    <div class="flex items-center flex-col ">
        <div class="flex avantages mt-3 flex-col md:flex-row">
        <div class="m-2 shadow rounded p-3">
            <h3 class="text-center font-bold text-purple-700 hover:text-purple-900">Fini les ressources papiers</h3>
            <p>
            Plus besoin de ce proméner avec des documents de cochages pour réviser, désormais coché vos QCM et QCD partout, n'importe où et quand vous vouliez.                 
            </p>
        </div>
        <div class="m-2 shadow rounded p-3">
            <h3 class="text-center font-bold text-purple-700 hover:text-purple-900">Des QCM et QCD intéractif</h3>
            <p class="text-gray-900">
L'ordre des propositions et des différentes questions sont mélanger aléatoirement pour obtenir plusieurs combinaisons possibles, qui vous  permettrons de bien les maitriser.             
            </p>
        </div>
        </div>
        <div class="flex mt-3 avantages flex-col md:flex-row ">
        <div class="m-2 shadow rounded p-3">
            <h3 class="text-center font-bold text-purple-700 hover:text-purple-900">Cours d'informatique, QCM et QCD</h3>
            <p class="text-gray-900">
     Des cours d'informatiques bien expliqué,  pour vous permettre de bien comprendre les conceptes informatique, comme(les conversion d'unité informatique,les variable les types de données)
     et vous testez avec nos differents quiz.           
            
    </p>
        </div>

        <div class="m-2 shadow rounded p-3">
            <h3 class="text-center font-bold text-purple-700 hover:text-purple-900">Maîtraise total des documents de cochage</h3>
            <p class="text-gray-900">
                Nos QCD et QCM intéractif vous permettrons de connaitre tout les documents de cochages que ce soit Biochime des molécules simple (BMS) et Biochime Enzymatique et Bioénergetique (BEB).
            </p>
        </div>
        </div>
        

    </div>
</div>

<div class="m-2 shadow rounded bg-green-500  p-3">
            <h3 class="text-center font-bold text-4xl text-white">Intellect  Tronc Formation (ITF) </h3>
            <h3 class="text-center font-bold italic  text-red-900">Votre réussite est notre priorité </h3>

            <!--SECTION ITF-->
            <div class="text-white flex justify-center">
                <div class="rounded text-gray-900  pt-5 my-5">
                    <ul class="font-bold text-white text-3xl">  
                    <li class="text-center font-bold text-black m-2 italic">Vous êtes nouveaux bacheliers pour votre réussite <br> 
                    il n'y a qu'Intellect Tronc Formation (ITF) pour l'assurée</li>
            <hr>
                        <li>Structure de renforcement</li>
                        <li>Qui dispense des cours dans l'unité d'enseignement
                    <ul>
                        <li class="font-bold">- SN</li>
                    </ul>        
                    </li>
                    <li class="text-center">Résultat de l'année passée</li>
                    </ul>
                    <div class="flex parPercent flex-col md:flex-row items-center md:justify-around">
                            <div class=" shadow-md  bg-red-700 p-5 text-2xl m-2 text-center p-3 percent">
                                INSCRIT <br> 80 
                            </div>

                            <div class=" shadow-md bg-red-700 p-5  sm:mx-5 text-2xl m-2 text-center p-3 percent">
                                VALIDE <br> 80 
                            </div>


                            <div class=" shadow-md  bg-red-700 p-2 text-2xl m-2 text-center  percent">
                                REUSSITE 100% 
                            </div>
                    </div>
                    
                </div>  

                <div class="rounded ">
                    <img class="img shadow" width="450" src="/images/itf.png" alt="image"/>
                </div>  
            </div>
            <ul class="flex justify-center text-center text-white font-bold flex-col md:flex-row">
                        <li class="m-2"> <i class="bi bi-phone-vibrate"></i> : 07 47 49 10 72 </li>
                        <li class="m-2"> <i class="bi bi-telephone-forward"></i> : 07 09 75 92 29 </li>
                        <li class="m-2"> <i class="bi bi-telephone-inbound"></i> : 07  77 31 89 31 </li>


                    </ul>
        </div>

    <div class="mt-2">
        <h1 class="text-4xl font-bold text-2xl text-purple-900  text-center">TARIFS</h1>
        <p style="font-size:20px" class="p-3 font-bold text-gray-900 text-center">
        S'abonner  sur E-learninguna, c'est soutenir la création de nouveaux contenus chaque semaine
         et accéder à du contenu exclusif pour apprendre et s'améliorer (comme des cours et QCM , QCD intératif).<div class="flex justify-center font-family:arial">
    <div class="flex flex-col md:flex-row">
   <div style="max-width: 500px;  min-height:max-content" class="  p-5 shadow shadow m-2">
    <h2 style="font-family:helvetica
    ;" class="prix text-3xl  text-center font-bold text-purple-900">1.000 <br> francs CFA</h2>
    <ul class="flex flex-col text-center">
    <li class="font-bold">Chaque 3 mois</li>
    <li class="mt-2"><a class="btn-color rounded" href="{{route('abonnement',['type'=>'trimestre'])}}"> s'abonner</a></li>

    </ul>

</div>
    <div style="max-width: 500px; font-family:Arial; min-height:max-content" class="m-2 p-5 shadow rounded bg-purple-900  ">
    <h2 style="font-family:helvetica" class="prix text-3xl text-center animate-pulse  font-bold text-white">1.500 <br> francs CFA</h2>
<ul class="flex flex-col text-white text-center font-bold">
    <li>pour l'année</li>
    <li>-25%</li>
    <li>le plus utiliser</li>
    <li class="mt-2"><a class=" rounded btn-white" href="{{route('abonnement',['type'=>'annuel'])}}"> s'abonner</a></li>




</ul>
</div>
</div>

   </div>
   
    </div>

<hr>
<div class="flex justify-center">
  <div  class="demo">
    <h3 class="text-center font-bold my-2">DEMO</h3>
<ul class="flex flex-col  text-center font-bold">
    <li>Biochimie</li>
    <li>Glucides</li>
    <li class="mt-2"><a class="rounded btn-color" href="{{route('demo')}}">Faire une demo</a></li>

</ul>
  </div>
</div>
  

@endsection