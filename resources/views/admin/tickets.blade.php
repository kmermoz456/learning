<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

    <title>Liste de code</title>
</head>
<body>
    <div class="p-5">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
            <th>N°</th>
            <th>Code</th>
            <th>Status</th>
            <th>Montant</th>
            <th>Vendu</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tickets as $key=>$ticket)
    <tr>
    
        <td>{{$key+1}}</td>
        <td>{{$ticket->numero_ticket}}</td>
        <td class="text-center">@if($ticket->status)<button class=" px-1 bg-red-900 text-white rounded">Utilisé</button>@else<button class=" px-1 bg-green-300 text-black font-bold rounded">actif @endif</button></td>
        <td>{{$ticket->montant}}</td>
        <td class="text-center"><input type="checkbox"> oui</td>

    </tr>
@endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5">{{$tickets->links()}}</td>
            </tr>
        </tfoot>
    </table>
    <div class="py-2 text-center">
        <a href="/dashboard" class="btn-color rounded">Retour</a>
    </div>
    </div>

    
</body>
</html>