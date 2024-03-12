<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div class="container">
@if(isset($utilisateur))
    <h1>Profil de {{ $utilisateur->name }}</h1>
    <p>Nom d'utilisateur : {{ $utilisateur->name }}</p>
    <p>Prenom : {{ $utilisateur->prenom }}</p>
    <p>Profession : {{ $utilisateur->prof }}</p>
@else
    <p>Utilisateur non trouvé.</p>
@endif

    
<div class= "row">
    <form action="/upload-pdf" method="POST" enctype="multipart/form-data">
    @csrf
    Insérez votre cv: <input type="file" value="cv" name="cv">
</form>

<form action="/upload-pdf" method="POST" enctype="multipart/form-data">
    @csrf
   Insérez votre attestation: <input type="file" value="attestation" name="attestation">
</form>

<form action="{{ url('/user/{nom}/{prenom}/{profession}') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger">Envoyer</button>
</form>
</div>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>