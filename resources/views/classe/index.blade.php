<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste etudiant</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
    <body class="bg-dark">
        <div class="container">
            <div class="">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                        <h2>liste etudiant</h2>
                        </div>
                        <div class="card-body">
                            <!-- <a href="{{url('/classe/create') }}" class="btn btn-success btn sm" title="Ajouetr un etudiant"> -->
                                ajouter
                            </a>
                            <br><br>
                            <div class="tables reponssive">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>prenom</th>
                                                <th>nom</th>
                                                <th>matiere</th>
                                                <th>note</th>
                                                <th>examen</th>
                                            </tr>
                                        </thead>
                                         <tbody>
                                            @foreach($classe as $classe )
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$loop->prenom}}</td>
                                                <td>{{$loop->nom}}</td>
                                                <td>{{$loop->matiere}}</td>
                                                <td>{{$loop->note_1}}</td>
                                                <td>{{$loop->examen}}</td>
                                                <a href="{{url('/classe/'.$item->id)}}"><button class="btn btn-info btn-sm"></i> liste etudiant</button></a>
                                            </tr>
                                            @endforeach
                                         </tbody>
                                    </table>  
                                 </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
        
    </body>
    
</body>
</html>