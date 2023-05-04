<div style="overflow: auto; height:400px" class="p-5">
@if (session()->has('message'))
            <div class="text-center text-red-900">
                {{ session('message') }}
            </div>
        @endif
    <div>
        <input wire:model.debounce.500ms="search" type="tel" class="w-full my-1 rounded text-center" placeholder="recherche ici ">
    </div>
<table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
            <th>Identifiant</th>
            <th>Titre</th>
            <th>En ligne</th>
            <th>Niveau</th>
            <th>UE</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sujets as $key=>$sujet)
    <tr>
    
        <td>{{$sujet->id}}</td>
        <td>{{$sujet->title}}</td>
        <td class="text-center">@if($sujet->online)<button class=" px-1 bg-green-900 text-white rounded">oui</button>@else<button class=" px-1 bg-red-300 text-black font-bold rounded">non @endif</button></td>
        <td>{{$sujet->niveau}}</td>
        <td>{{$sujet->ue}}</td>
     <td class="flex">
        <button class="px-3 py-2 mx-1 text-white bg-red-700 rounded" wire:click="delete({{$sujet->id}})">Supprimer</button>

     </td>

    </tr>
@endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">{{$sujets->links()}}</td>
            </tr>
        </tfoot>
    </table>
</div>
