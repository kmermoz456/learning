<div>
    <div><input wire:model.debounce.500ms="name" class="w-full rounded text-center text-gray-800" type="text"  placeholder="Chercher Ici par nom"></div>
<table style="overflow: auto;" class="table my-2 table-bordered table-striped">
<thead>

    <tr>
    <th>N°</th>
    <th>Nom et prenoms</th>
    <th>Niveau</th>
    <th>Téléphone</th>
    <th>status</th>
    <th>email</th>
    <th>role</th>

    </tr>
</thead>
<tbody>
    @forelse($users as $user)
    <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->niveau}}</td>
        <td>{{$user->tel}}</td>
        @if($user->status)<td class="text-green-700">Actif</td>@else<td class="text-red-600">inactif</td>@endif
        <td>{{$user->email}}</td>
        <td>{{$user->role}}</td>


    </tr>
    @empty
    <tr>
        <td colspan="6" class="text-center text-red-900">Aucun Nom trouvé</td>
    </tr>
    @endforelse
</tbody>
<tfoot>
    <tr>
        <td colspan="5" class="text-center">{{$users->links()}}</td>
    </tr>
</tfoot>
</table>
</div>
