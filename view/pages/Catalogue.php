<?php
require_once ('../../config.php') ;

$db = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_PORT) OR die("La connection à la base de données a echouée");
mysqli_set_charset($db, "utf8");



    if((!empty($_POST['nombiere'])) &&
    (!empty($_POST['pourcentage'])) &&
    (!empty($_POST['Brasserie'])) &&
    (!empty($_POST['prix'])) &&
    (!empty($_POST['type']))  ) {

        function insertbiere($db,$nombiere,$pourcentage,$brasserie,$prix,$idStyle) {
            $sql = "INSERT INTO bieres(nombiere,pourcentage,Brasserie,prix,Style_id) VALUES (''$_POST[nombiere]',''$_POST[pourcentage]',''$_POST[brasserie]',''$_POST[prix]',''$_POST[idStyle]')";
            $result = mysqli_query($db,$sql);
            return $result ? "La bière à été ajouté" : "L'insertion a échouée:".mysqli_error($db) ;
        }

    }
   






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3> Ajouter un article </h3>
<form action="" method="post">

Bière: <input class="article" type="text" name="nombiere" />
Pourcentage: <input class="pourcentage" type="number" name="pourcentage" />
Brasserie: <input class="brasserie" type="text" name="Brasserie" />
Prix : <input class="prix" type="number" name="prix" />
type <input class="typebiere"type="text" name="type" />
<h3> Ajouter une image </h3>
<input name="nomdelimage" type="file" class="imageupload" placeholder="Votre image" >
<input type="submit" />
</form>


</body>
</html>

