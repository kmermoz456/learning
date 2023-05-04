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
            <th>Proposition</th>
            <th>Point</th>
            <th>Id Question</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($propos as $key=>$propo)
    <tr>
        <td>{{$propo->id}}</td>
        <td>{{$propo->content}}</td>
        <td>{{$propo->point}}</td>
        <td>{{$propo->question_id}}</td>
     <td class="flex">
        <button class="px-3 py-2 mx-1 text-white bg-red-700 rounded" wire:click="delete({{$propo->id}})">Supprimer</button>

     </td>

    </tr>
@endforeach
        </tbody>
        <tfoot>
            
        </tfoot>
    </table>
</div>
