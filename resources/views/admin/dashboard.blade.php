<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord administrateur responsive</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="icon" href="{{asset('images/logo.png')}}"/>



@livewireStyles       
    </head>

<body>
    <div class="container">
        <div class="navigateur">
        <ul>
            <li>
                <a href="{{route('index')}}">
                    <span class="icon"><i class="bi bi-house-door-fill"></i></span>
                    <span class="title">EU e-learninguna</span>
                </a>
            </li>
            <li>
                <a href="{{route('todo',['actions'=>'sujet'])}}">
                    <span class="icon"><i class="bi bi-journal-bookmark-fill"></i></span>
                    <span class="title">Créer un sujet </span>
                </a>
            </li>

            <li>
                <a href="{{route('todo',['actions'=>'questions'])}}">
                    <span class="icon"><i class="bi bi-patch-question-fill "></i></span>
                    <span class="title">Ajouter des questions </span>
                </a>
            </li>
            <li>
                <a href="{{route('todo',['actions'=>'propos'])}}">
                    <span class="icon"><i class="bi bi-bookmark-plus-fill "></i></span>
                    <span class="title">Ajouter des propositions </span>
                </a>
            </li>

            <li>
                <a href="{{route('todo',['actions'=>'delete'])}}">
                    <span class="icon"><i class="bi bi-file-x"></i></span>
                    <span class="title">Supprimer </span>
                </a>
            </li>


           

            <li>
                <a href="{{route('todo',['actions'=>'messager'])}}">
                    <span class="icon"><i class="bi bi-messenger"></i></span>
                    <span class="title">Message </span>
                </a>
            </li>

            <li>
                <a href="{{route('dashboard')}}">
                    <span class="icon"><i class="bi bi-people-fill"></i></span>
                    <span class="title">Utilisateur </span>
                </a>
            </li>
            <li>
                <a href="/user/profile">
                    <span class="icon"><i class="bi bi-gear"></i></span>
                    <span class="title">Paramettre </span>
                </a>
            </li>
            <li>
                <a href="route">
                    <span class="icon"><i class="bi bi-box-arrow-in-right"></i></span>
                    <span class="title">Déconnexion </span>
                </a>
            </li>
        </ul>
    </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <i class="bi bi-menu-button-wide"></i>
                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="search here" />
                        <i class="bi bi-search"></i>
                    </label>

                </div>

                <div class="user">
                    <img width="45" height="50" src="{{asset('images/user.jpeg')}}" />
                </div>
            </div>




            <div class="cardBox flex justify-between flex-col md:flex-row">
                <div class="card rounded shadow">
                    <div>
                        <div class="numbers">Abonnement</div>
                        <div class=" btn-color  rounded"> <a href ="{{route('todo',['abonner'])}}">Abonner</a></div>
                    </div>
                    
                </div>

                <div class="card rounded shadow">
                    <div>
                        <div class="numbers">80</div>
                        <div class="btn-color  rounded">Notifications </div>
                    </div>
                   
                </div>

                <div class="card rounded shadow">
                    <div>
                        <div class="numbers">{{$montant ?? 'Pas disponible'}} </div>
                        <div class="btn-color  rounded">Solde</div>
                    </div>
                   
                </div>

                <div class="card rounded shadow">
                    <div>
                        <div class="numbers">1</div>
                        <div class="btn-color  rounded">Correction</div>
                    </div>
                    
                </div>
                </div>

                <!--actions-->
                <div class="mt-5 p-5">
        @if(isset($actions))
  <!--Abonnement-->
        @if(($actions === 'abonner'))
        @livewire('abonner')
        @endif
  <!--Sujet-->

        @if(($actions === 'sujet'))
        @livewire('sujet')
        @endif
  <!--Examen-->

        @if(($actions === 'examen'))
        @livewire('examen')
        @endif
  <!--questions-->

        @if(($actions === 'questions'))
        @livewire('questions')
        @endif
  <!--propositions-->

        @if(($actions === 'propos'))
        @livewire('propos')
        @endif
  <!--liste utilisateur-->

        @else
        @livewire('user-list')
        @endif
                    </div>

                 </div>

                   


                </div>

    
@livewireScripts

    <script>

        let toggle = document.querySelector('.toggle .bi');

        toggle.addEventListener('click', function (e) {
            let toggle = document.querySelector('.toggle');
            let navigateur = document.querySelector('.navigateur');
            let main = document.querySelector('.main');

            toggle.classList.toggle('active');
            main.classList.toggle('active');
            navigateur.classList.toggle('active');
        })

    </script>
</body>

</html>