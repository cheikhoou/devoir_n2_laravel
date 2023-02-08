<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJOUTER</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<div class="containe">
    <div class="card mt-5 ml-5 mr-5">
        <div class="card-header">
          <h2>ajouter les informations de l'etudiant</h2>
        </div>
        <div class="card-bady">

           <form action="/store"  method="post">
              @csrf
             <div class="form-group">
                <label for="name">prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control">
             </div>
             <div class="form-group">
                <label for="name">nom</label>
                <input type="text" name="nom" id="nom" class="form-control">
             </div>
             <div class="form-group">
                <label for="name">matiere</label>
                <input type="text" name="matiere" id="matiere" class="form-control">
             </div>
             <div class="form-group">
                <label for="name">note_1</label>
                <input type="text" name="note_1" id="note_1" class="form-control">
             </div>
             <div class="form-group">
                <label for="taxt">examen</label>
                <input type="text" name="examen" id="examen" class="form-control">
             </div>
             <div class="form-group">
                <button type="submit" class="btn btn-info">Enregistrer</button>
             </div>
           </form>
        </div>
    </div>
</div>
</body>
</html>