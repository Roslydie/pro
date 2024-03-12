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
    <h1>Login Utilisateur</h1>
     
     @if (session('status'))
      <div class="alert alert-success">
         {{ session('status') }}
         </div>
     @endif
     <ul>
     @foreach ($errors->all() as $error) 
         <li class="alert alert-danger">{{ $error }}</li>
     @endforeach
     </ul>

    <form action='/pers' method="POST">
    @csrf

            <div class="mb-3">
           <label for="nom">Nom *</label>
           <input type="text" class="form-control" id="nom" name="nom" >
             </div>

             <div class="mb-3">
             <label for="prenom">Prenom *</label>
             <input type="text" class="form-control" id="prenom" name="prenom" >
           </div>
           <div class="mb-3">
           <label for="email">Email *</label>
           <input type="email" class="form-control" id="email" name="email" >
           </div>

            <div class="mb-3">
           <label for="tel">Tel *</label>
           <input type="text" class="form-control" id="tel" name="tel" >
           </div>
          
           <div class="mb-3">
           <label for="prof">Prof *</label>
           <input type="text" class="form-control" id="prof" name="prof" >
           </div>
        
           <div class="mb-3">
           <label for="adresse">Adresse *</label>
           <input type="text" class="form-control" id="adresse" name="adresse" >
           </div>
           <div class="mb-3">
           <label for="password">Mot de passe *</label>
           <input type="password" class="form-control" id="password" name="password" >
           </div>

        
   
 
    <!-- <button type="submit">S'inscrire</button> -->
    <div class="row">
              <div class="col-md-12-mb-12">
                <input type="submit"  class="btn btn-primary" value="Sign up">
              </div>
    </div>
    </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>