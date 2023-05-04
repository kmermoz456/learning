<div>
        <h2 class="text-center text-purple-900">Gestion des Question</h2>

        @livewire('question-list')


<form wire:submit.prevent="store" class="my-3">
@if (session()->has('message'))
            <div class="text-center text-green-900">
                {{ session('message') }}
            </div>
        @endif
@csrf
<div  class="my-2 flex flex-col  ">
    <label for="qes"> Pour la question :</label>
    <input class="rounded" type="number"  wire:model.debounce.500ms="question_id" id="qes" name="question_id" />
</div>
<div class="my-2">
    <label>Texte de la propositions:</label>
    <textarea required class="rounded w-full"  wire:model.debounce.500ms="content" name="content" placeholder="contenu de la question">

    </textarea>
</div>

<div  class="my-2 flex flex-col  ">
    <label for="typ">Type:</label>
    <select id="typ"  wire:model.debounce.500ms="point" class="rounded" name="point">
        <option value="">----Selectionner un type---</option>
        <option value="1">juste</option>
        <option value="0">fausse</option>

    </select>
</div>


<p class="text-center"><button class="btn-color rounded" type="submit">Sauvegarder</button></p>
        </form>
    <hr>


    @livewire('propo-list')




    <!--Mise a jour-->
    
        <h2 class="text-center my-1 text-purple-900">Mise à jour de question</h2>
        <form method="POST" action="{{route('propoupdate')}}" class="my-1">

@csrf
<div  class="my-2 flex flex-col  ">
    <label for="idq"> Id de la proposition :</label>
    <input class="rounded" type="number" wire:model.debounce.500ms="idp"  id="idq" name="id" />
</div>

<div  class="my-2 flex flex-col  ">
    <label for="qes"> Pour la question :</label>
    <input class="rounded" type="number" value="{{$propo->question_id ?? ''}}"   id="qes" name="question_id" />
</div>
<div class="my-2">
    <label>Texte de la propositions:</label>
    <textarea required class="rounded w-full" name="content"   placeholder="contenu de la question">{{$propo->content ?? ''}}</textarea>
</div>

<div  class="my-2 flex flex-col  ">
    <label for="typ">Type:</label>
    <select id="typ"   class="rounded" name="point">
        <option value="1">juste</option>
        <option value="0">fausse</option>

    </select>
</div>


<p class="text-center"><button class="btn-color rounded" type="submit">Sauvegarder</button></p>
        </form>


</div>
