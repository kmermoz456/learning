<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EU | Mes notes</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-icons/font/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>

<body>
            <h2 class=" my-5 text-2xl text-center text-purple-900">Mes notes</h2>


            <div style="overflow: auto;" class="p-5">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Sujet</th>
                        <th>Notes</th>
                        <th>Faute</th>
                        <th>Date</th>

                        </tr>
                    </thead>
                    <tbody>
            <tr>
                        @foreach($notes as $note)
                        <td>{{$note->id}}</td>
                        <td>{{str_replace('_',' ',$note->title)}}</td>
                        <td class="text-gray-900 font-bold text-2xl">{{$note->notes}}</td>
                        <td class="text-red-900">{{$note->faute}}</td>
                        <td>{{$note->created_at}}</td>      
           </tr>
                        @endforeach
                    </tbody>

                </table>
                <p>
                    <a class="btn-color rounded" href="{{URL::previous()}}">Retour</a>
                </p>
            </div>




</body>

</html>