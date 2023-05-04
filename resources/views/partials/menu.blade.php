 <!--WEB-MENU-->
 <nav class="flex mx-5 my-1 show  font-bold  rounded relative py-1 justify-between items-center">
      <ul><li> <a href="/"> <img width="100" height="100" src="{{asset('images/logo.png')}}" alt="logo"/></a></li></ul>
        <ul class="flex ">

            <li onclick="dropdown()" class="mx-5  dropdown relative"><a class="hover:text-purple-900" href="#">Biochimie<span> </a> 
<i class="bi font-bold bi-chevron-down"></i>
            
            <div  class=" bms-sub-menu bg-white hidden  rounded shadow mt-5 min-w-max   absolute">
         <ul class="relative  flex flex-col ">
            <li class="p-1"><a href="{{route('sujet.show',['ue'=>'biochimie'])}}">Biochimie des Molécules Simples (BMS)</a></li>
            <li class="p-1"><a href="{{route('sujet.show',['ue'=>'biochimie_enzymatique_bioénergetique'])}}">Biochimie Enzymatyque et Bioenergetique(BEB)</a></li>
        </ul>
        </div>
            </li>
            <li class="mx-5 hover:text-purple-900"><a class="text-center" href="{{route('sujet.show',['ue'=>'biologie_cellulaire'])}}">Biologie cellulaire</a></li>
            <li class="mx-5 hover:text-purple-900"><a class="text-center" href="{{route('sujet.show',['ue'=>'informatique'])}}">informatique</a></li>
        <li class="mx-5 text-center hover:text-purple-900"><a class="text-center" href="{{route('sujet')}}">Foire aux sujets</a></li>

        </ul>
        @guest
        <ul class="flex items-center text-center  ">

            <li  class="mx-5 hover:text-purple-900"><a href="/login">Se connecter</a></li>
            <li  class="mx-5 hover:shadow-lg  btn-color rounded "><a href="/register">s'inscrire</a></li>

        </ul>
        @endguest
        @auth
<ul class="flex items-center   ">

    <form method="POST"  action="{{route('logout')}}" >
        @csrf
<li  class="mx-5 hover:text-purple-900 "><button class="btn-white rounded hover:shadow-lg" type="submit">Déconnexion</li></button>
</form>
            <li  class="mx-5 hover:shadow-lg  btn-color rounded "><a href="/dashboard">Tableau de bord</a></li>
           
        </ul>
@endauth
    </nav>
    <!--MOBIL-MENU-->
    <nav class="md:hidden  ">
    <div class="flex font-bold bg-white rounded relative py-1  justify-between items-center shadown-sm"> 
    <ul><li> <a href="/"> <img width="50" height="50" src="{{asset('images/logo.png')}}" alt="logo"/></a></li></ul>
    @guest 
    <ul class="flex items-center   ">
            <li  class="hover:text-purple-900"><a href="/login">Se connecter</a></li>
            <li  class="hover:shadow-lg  btn-color rounded "><a href="/register">S'inscrire</a></li>

        </ul>
@endguest
@auth
<ul class="flex flex-row">
<form method="POST"  action="{{route('logout')}}" >
        @csrf
<li  class="mx-1 hover:text-purple-900 font-bold "><button class=" btn-white rounded  hover:shadow-lg" type="submit">Déconnexion</li></button>
</form>
       <li  class="mx-1 hover:shadow-lg  btn-color rounded "><a href="/register">Tableau de bord</a></li>

        </ul>
@endauth
        <ul>
            <li onclick="menu()"><a class="menu-btn" href="#">
            <i style="font-size: 30px;" class=" text-purple-900  bi mr-2 bi-menu-button-wide-fill"></i>
            </a></li>
        </ul>
        </div>
        <div class="bg-white rounded">
      <ul class="flex mx-2 py-2  hidden flex-col  mobile-menu ">
        <li class="font-bold hover:text-purple-900"><a href="{{route('sujet')}}">Foire aux sujets</a></li>
      <li onclick="mobile()" class="font-bold  dropdown relative"><a class=" chevron hover:text-purple-900" href="#">Biochimie
<i class="bi  bi-chevron-down"></i>

      </a>
            <div  class=" bg-white   menu-mobile  hidden rounded shadow mt-3 min-w-max   absolute">
         <ul class="relative     flex flex-col ">
         <li class="p-1 hover:bg-purple-900 hover:text-white"><a href="{{route('sujet.show',['ue'=>'biochimie'])}}">Biochimie des Molécules Simples (BMS)</a></li>
            <li class="p-1 hover:bg-purple-900 hover:text-white"><a href="{{route('sujet.show',['ue'=>'biochimie_enzymatique_bioénergetique'])}}">Biochimie Enzymatyque et Bioénergetique (BEB)</a></li>
         </ul>
            
        </div>
            </li>
            <li class=" font-bold  hover:text-purple-900"><a href="#">Biologie cellulaire</a></li>
            <li class=" font-bold  hover:text-purple-900"><a href="#">informatique</a></li>

        </ul>
        </div>
        
    </nav>
    
