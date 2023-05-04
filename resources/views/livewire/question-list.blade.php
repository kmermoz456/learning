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
            <th>Type</th>
            <th>point</th>
            <th>repondes juste</th>
            <th>du Sujet</th>

            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($questions as $key=>$question)
    <tr>
    
        <td>{{$question->id}}</td>
        <td>{{$question->content}}</td>
        <td>{{$question->type}}</td>
        <td>{{$question->point}}</td>
        <td>{{$question->good_ans}}</td>
        <td>{{$question->sujet_id}}</td>


     <td class="flex">
        <button class="px-3 py-2 mx-1 text-white bg-red-700 rounded" wire:click="delete({{$question->id}})">Supprimer</button>

     </td>

    </tr>
@endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">{{$questions->links()}}</td>
            </tr>
        </tfoot>
    </table>
</div>
