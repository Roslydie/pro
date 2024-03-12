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
<h1>Liste des Utilisateurs</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Profession</th>
            <th>CV</th>
            <th>Attestation</th>
        </tr>
        @if (isset($utilisateur))
            
        
        @foreach($utilisateurs as $utilisateur)
            <tr>
                <td>{{ $utilisateur->nom }}</td>
                <td>{{ $utilisateur->prenom }}</td>
                <td>{{ $utilisateur->prof }}</td>
                <td><a href="{{ asset('storage/' . $utilisateur->cv) }}">Télécharger CV</a></td>
                <td><a href="{{ asset('storage/' . $utilisateur->attestation) }}">Télécharger Attestation</a></td>
            </tr>
        @endforeach
        @endif
    </table>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>