<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
<a href="/" class="hover:text-purple-900 font-bold text-2xl"> Accueil</a>
    </h2>
        
    </x-slot>

<div class="px-5">
<div class=" my-3">
      
<h2 class="text-center font-bold text-2xl">Bienvenu dans le tableau de bord ici vous pouvez administrer vos données et les mettres à jour</h2>
           </div>
    <div class="py-5 px-5  justify-center flex flex-col md:flex-row">

<!---->

        <div class="relative justify-between flex p-5 mt-2 md:mx-2 bg-white flex rounded shadow"> 
            <div class=" mt-2 flex justify-between md: mx-2" ><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-messenger text-purple-900 " viewBox="0 0 16 16">
  <path d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z"/>
</svg></i></div>
                <h3 class="m-2 mt-2 text-2xl  font-bold"><a class="hover:text-purple-800" href="/nofif">Notifications</a></h3>
                <div class="rounded-full p-3 bg-red-400 text-white  shadow font-bold">0</div>
        </div>
<!---->

<!---->
<div class="relative p-5 mt-2 flex justify-between md:mx-2 bg-white flex rounded shadow"> 
            <div class="  mx-2" ><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-book-half text-purple-900" viewBox="0 0 16 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</svg></div>
                <h3 class="m-2 mt-2 text-2xl  font-bold"><a class="hover:text-purple-800" href="{{route('note')}}">Mes notes</a></h3>
                <div class="rounded-full p-3 bg-red-400 text-white shadow font-bold">20/20</div>
        </div>
<!---->
<div class="relative p-5 mt-2 flex justify-between md:mx-2 bg-white flex rounded shadow"> 
           <div class="mx-2">
           <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-credit-card-2-back-fill text-purple-900" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5H0V4zm11.5 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-2zM0 11v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1H0z"/>
</svg>
           </div>
                <h3 class="m-2 mt-2 text-2xl  font-bold"><a class="hover:text-purple-800" href="#abon">Status</a></h3>
              @if(Auth()->user()->status) 
               <div class=" p-3 text-green-900 font-bold">Actif</div>
              @else
              <div class="p-3 text-red-800 shadow font-bold">Non-abonner</div>
              @endif
        </div>
<!---->
           </div>
           </div>
        
           <div>
        @if(!(Auth()->user()->status))
           <div class="my-5" id="abon">
              <h2 class="text-center font-bold text-2xl"> mon abonnement</h2>
           <div>
                   <div class="erreur my-2 px-5">
                 @if(isset($status)) @if($status) 
                 <div class="p-5 rounded font-bold text-center bg-green-700 text-white">Opération éffectuée avec succès <a href="/dashboard" class="underline">  actualiser</a> la page</div>
                  @else <div class="p-5 rounded text-center bg-red-700 font-bold text-white">Cet code n'est existe pas ou déja utilisé</div>@endif @endif
                   </div>
                   <form method="post" action="{{route('user.abon')}}" class="">
                           @csrf
                <div class="flex justify-center flex-row ">
                        <input type="text" value="{{$_POST['code']??''}}" placeholder="--CODE ICI--" name ="code" class="text-center mx-2 rounded" />
                        <button type="submit"   class="btn-color rounded hover:shadow-md">J'active mon compte</button>
                </div>
                   </form>
           </div>
          </div>
          @endif
          <p  class="text-center my-5"><a class="btn-color my-5 rounded" href="{{route('sujet')}}">Foire aux sujets</a></p>
           </div>
</x-app-layout>
