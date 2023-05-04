<div>
        <h2 class="text-center text-purple-900">Création d'examen d'éssaie</h2>

    @livewire('sujet-list')
      

<form wire:submit.prevent="store" class="my-3">
@if (session()->has('message'))
            <div class="text-center text-green-900">
                {{ session('message') }}
            </div>
        @endif
@csrf
<div  class="my-2 flex flex-col  ">
    <label for="suj"> Pour le sujet :</label>
    <input class="rounded" type="number"  wire:model.debounce.500ms="sujet_id" id="sujt" name="sujet_id" />
</div>

<div class="my-2">
    <label>Texte de la question:</label>
    <textarea required class="rounded w-full"  wire:model.debounce.500ms="content" name="content" placeholder="contenu de la question">

    </textarea>
</div>

<div  class="my-2 flex flex-col  ">
    <label for="typ">Type:</label>
    <select id="typ"  wire:model.debounce.500ms="type" class="rounded" name="type">
        <option value="QCM">----Selectionner un type---</option>
        <option value="QCM">QCM</option>
        <option value="QCD">QCD</option>

    </select>
</div>

<div  class="my-2 flex flex-col  ">
    <label for="gas"> nombre de question juste (QCM) et 1 vrai ou 0 fausse (QCD) :</label>
    <input class="rounded"  wire:model.debounce.500ms="good_ans" type="number" id="gas" name="good_ans" />
</div>
<div  class="my-2 flex flex-col  ">
<label for="piont"> Point de la question: </label>
    <input class="rounded" wire:model.debounce.500ms="point" type="number" id="gas" name="point" />
</div>

<p class="text-center"><button class="btn-color rounded" type="submit">Sauvegarder</button></p>
        </form>
    <hr>

    <!--FORM-->
    @livewire('question-list')

    <form class="border" method="POST" action="{{route('questionimage')}}" enctype="multipart/form-data">
        @csrf
    <div  class="my-2 flex flex-col  ">
    <label for="quest"> Pour la question:</label>
    <input class="rounded" type="number"   id="quest" name="question_id" />
</div>
<div  class="my-2 flex flex-col  ">
    <label for="img"> images:</label>
    <input class="rounded" type="file"  id="img" name="image" />
</div>
<p class="text-center"><button class="btn-color rounded" type="submit">Sauvegarder</button></p>

    </form>





    <!--Mise a jour-->
    
        <h2 class="text-center my-3 text-purple-900">Mise à jour de question</h2>

        <form method="POST" action="{{route('question.update')}}" class="my-3">
@if (session()->has('message'))
            <div class="text-center text-green-900">
                {{ session('message') }}
            </div>
        @endif
@csrf
<div  class="my-2 flex flex-col  ">
    <label for="suj">Identifiant de la question</label>
    <input class="rounded" type="number"  wire:model.debounce.500ms="idq" id="id" name="id" />
</div>
<div  class="my-2 flex flex-col  ">
    <label for="suj"> Pour le sujet :</label>
    <input class="rounded" type="number" value="{{$question->sujet_id ?? ''}}" id="sujt" name="sujet_id" />
</div>

<div class="my-2">
    <label>Texte de la question:</label>
    <textarea required name="content" class="rounded w-full">{{$question->content ?? ''}}</textarea>
</div>

<div  class="my-2 flex flex-col  ">
    <label for="typ">Type:</label>
    <select id="typ"class="rounded" name="type">
        <option value="QCM">QCM</option>
        <option value="QCD">QCD</option>

    </select>
</div>

<div  class="my-2 flex flex-col  ">
    <label for="gas"> nombre de question juste (QCM) et 1 vrai ou 0 fausse (QCD) :</label>
    <input class="rounded"   value="{{$question->good_ans ?? ''}}" type="number" id="gas" name="good_ans" />
</div>
<div  class="my-2 flex flex-col  ">
<label for="piont"> Point de la question: </label>
    <input class="rounded"  value="{{$question->point ?? ''}}" type="number" id="gas" name="point" />
</div>

<p class="text-center"><button class="btn-color rounded" type="submit">Sauvegarder</button></p>
        </form>


</div>
