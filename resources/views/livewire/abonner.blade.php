<div class="p-2">
       

        <div>
            <h1 class="my-3 text-2xl text-center uppercase text-purple-900">Page d'abonnement</h1>
            @if($send)
        @if($status)
        <div class="py-2 bg-green-300 my-2 rounded text-gray-900 text-center">Code genérer avec succès</div>
        <label> Code d'abonnement
                <input   disabled value="{{$code}}" class="w-full text-purple-900 text-center font-bold text-2xl rounded" type="text" />
            </label>
            @else
        <div class="p-5 bg-red-500 text-center rounded text-gray-900">Une erreur c'est produite</div>
        @endif

        @endif
          
            <label for="mtn">Montant
            <select wire:model="montant" class="rounded mt-2" name="type"> 
            <option value="">Selectioner un montant</option>
                <option value="1000">1000</option>
                <option value="1500">1500</option>
            </select>
            </label>
           <p class="text-center"> <button wire:click="abonner()" class="mt-2 btn-color rounded hover:shadow-lg"> <i class="bi bi-cash"></i>  Generer un code</button></p>
        </div>

        <div class="my-3">
          
    <div class="">
       
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
            <th>N°</th>
            <th>Code</th>
            <th>Status</th>
            <th>Montant</th>
            <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $key=>$ticket)
    <tr>
    
        <td>{{$key+1}}</td>
        <td>{{$ticket->numero_ticket}}</td>
        <td class="text-center">@if($ticket->status)<button class=" px-1 bg-red-900 text-white rounded">Utilisé</button>@else<button class=" px-1 bg-green-300 text-black font-bold rounded">actif @endif</button></td>
        <td>{{$ticket->montant}}</td>
        <td class="text-center"><button class=" px-1 bg-red-900 text-white rounded">supprimer</button></td>

    </tr>
@endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">{{$tickets->links()}}</td>
            </tr>
        </tfoot>
    </table>
    </div>
    
    <p class="text-center"><a class="btn-color rounded" href="{{route('code.list')}}">Télécharger le code en pdf</a></p>
        </div>
    


</div>
