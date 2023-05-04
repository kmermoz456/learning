<div>
        <h2 class="text-center text-purple-900">Gestion des sujets</h2>


<form  action="{{route('store',['actions'=>'sujet'])}}" method="POST" class="my-3">
@csrf
<div class="my-2">
    <label>Titre:</label>
    <input required class="rounded w-full" name="title" type="text" placeholder="Titre"/>
</div>

<div  class="my-2  ">
    <label for="niv">Niveau</label>
    <select id="niv" class="rounded" name="niveau">
        <option value="SN1">Licence 1 des Sciences de la Nature(SN 1)</option>
        <option value="SN2">Licence 2 des Sciences de la Nature(SN 2)</option>

    </select>
</div>

<div  class="my-2  ">
    <label for="ue">Unité d'Enseignement</label>
    <select id="ue" class="rounded uppercase" name="ue">
        <option   value="biochimie">biochimie (BMS)</option>
        <option   value="biologie_cellulaire">biologie cellulaire</option>
        <option   value="informatique">Informatique</option>
        <option   value="biochimie_enzymatique_bioénergetique">biochimie enzymatique et bioénergetique</option> 


    </select>
</div>
<div  class="my-2  ">
    <label for="online">Publier:</label>
    <select id="online" class="rounded" name="online">
        <option value="1">OUI</option>
        <option value="0">NON</option>
    </select>
</div>

<p class="text-center"><button class="btn-color rounded" type="submit">Sauvegarder</button></p>
        </form>
    <hr>


    @livewire('sujet-list')




    <!--Mise a jour-->
    
        <h2 class="text-center my-3 text-purple-900">Mise à jour de sujet</h2>


<form method="POST" action="{{route('sujet.update')}}" class="my-3">
@csrf
<div>
    <input wire:model.debounce.500ms="ide" name="id" type="number" value="{{$sujet->id ?? ''}}" placeholder="Identifiant">
</div>
<div class="my-2">
    <label>Titre:</label>
    <input class="rounded w-full" name="title" value="{{$sujet->title ?? '' }}" type="text" placeholder="Titre"/>
</div>

<div  class="my-2 rounded ">
    <label for="niv">Niveau</label>
    <select id="niv" class="rounded" name="niveau">
        <option value="SN1">Licence 1 des Sciences de la Nature(SN 1)</option>
        <option value="SN2">Licence 2 des Sciences de la Nature(SN 2)</option>

    </select>
</div>

<div  class="my-2 rounded ">
    <label for="ue">Unité d'Enseignement</label>
    <select id="ue" class="rounded uppercase" name="ue">
        <option   value="biochimie">biochimie (BMS)</option>
        <option   value="biologie_cellulaire">biologie cellulaire</option>
        <option   value="informatique">Informatique</option>
        <option   value="biochimie_enzymatique_bioénergetique">biochimie enzymatique et bioénergetique</option> 


    </select>
</div>
<div  class="my-2 rounded ">
    <label for="online">Publier:</label>
    <select id="online" class="rounded" name="online">
        <option value="1">OUI</option>
        <option value="0">NON</option>
    </select>
</div>

<p class="text-center"><button class="btn-color rounded" type="submit">Modifier</button></p>
        </form>


</div>
