<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
<h1>connexion</h1>
<?php
if(isset($erreur)):
?>
<h2><?=$erreur?></h2>
<?php
endif;
  ?>
<form action="" name="Connexion" method="post">
  <div class="form-group">
    <label for="exampleInputlogin1">Votre Login</label>
    <input type="text"  name="pseudo" form-control" id="exampleInputlogin1" aria-describedby="" placeholder="Entré votre login" required>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input name="motdepasse" type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer votre mot de passe"  required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>