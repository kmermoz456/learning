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
    <link rel="icon" href="{{asset('images/logo.png')}}"/>



@livewireStyles       
    </head>

<body class="bg-gray-200">
    <header class="p-2 flex flex-col bg-purple-900">
       <p class="text-center my-2"> <a href="{{route('sujet')}}" class="  shadow-lg btn-color  rounded">Retour</a></p>
<ul class="flex flex-row  text-white font-bold justify-center">
    <li class="mx-1 text-center uppercase">Titre:{{str_replace('_',' ',$sujet->title)}}</li>
    <li class="mx-1 text-center uppercase">UE:{{str_replace('_',' ',$sujet->ue)}}</li>
    <li class="mx-1 text-center uppercase">Niveau:{{$sujet->niveau}}</li>

</ul>

      </header>

    <div class="p-3 m-5 my-3 bg-white rounded shadow ">
<div style="right: 0;" class="p-3 bg-gray-400 rounded shadow fixed">
<a href="#send" title="Aller en bas de la page"><i class=" text-white font-bold  bi bi-arrow-down"></i></a>
</div>
 <form method="POST" action="{{route('correction',['id'=>$sujet->id])}}" >
     @csrf
    @forelse($questions as $qkey => $question)
    <div class="p-2">
    <h2 class="font-bold text-gray-900 ">QCM:{{$qkey+1}} - {{$question->content}}</h2>
   @if($question->image->path ?? false)
    <div><a target="_target" href="https://e-learninguna.s3.af-south-1.amazonaws.com/images/{{$question->image->path ?? ''}}" title="zoomer"> <img width="100" height="100" src="https://e-learninguna.s3.af-south-1.amazonaws.com/images/{{$question->image->path ?? ''}}"/></a></div>
   @endif
    <ul class="flex flex-col">
    @if($question->type == "QCM")
    @foreach(Arr::shuffle($question->propos->toArray()) as $pkey=> $propo)
    <li class=""><label> <input class=" mx-2 rounded" name="{{$question['id']}}[]" value="{{$propo['point']}}" type="checkbox">{{$propo['content']}}
    @if($send)
    @if($propo['point']) <i class="bi text-green-900 bi-check-circle"></i> 
     @else <i class="bi text-red-900 bi-x-circle"></i> 
      @endif
      @endif
     

</label>
</li>

    @endforeach
    @else
    @if($question->good_ans == "0")
    <li class=""><label> <input class=" mx-2 rounded" name="{{$question->id}}" value="0" type="radio">
    vrai</label></li>
    <li class=""><label> <input class=" mx-2 rounded" name="{{$question->id}}" value="1" type="radio">
    faux</label></li>
    @else
    <li class=""><label> <input class=" mx-2 rounded" name="{{$question->id}}" value="1" type="radio">
    vrai</label></li>
    <li class=""><label> <input class=" mx-2 rounded" name="{{$question->id}}" value="0" type="radio">
    faux</label></li>
    @endif
    
    @endif
    </ul>
    </div>
    <hr>
    @empty
 <p>Question bientôt  disponible</p>
    @endforelse
    
    <div id="send" class=" relative flex text-center  m-5 md:my-5 ">
      <p class="text-center">  <button type="submit" class="btn-color mx-2 rounded  ">valider</button>
      <p class="text-center">  <button type="reset" class="btn-choix shadow bg-gray-900 mx-2 rounded">recommencer</button>

    </div>
    </form>
</div>


@livewireScripts
</body>

</html>
