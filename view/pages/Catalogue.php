<?php
require_once ('../../config.php') ;

if ((isset($_POST['nombiere'])) &&
(isset($_POST['pourcentage'])) &&
(isset($_POST['Brasserie'])) &&
(isset($_POST['prix'])) &&
(isset($_POST['type'])) ) {

    if((!empty($_POST['nombiere'])) &&
    (!empty($_POST['pourcentage'])) &&
    (!empty($_POST['Brasserie'])) &&
    (!empty($_POST['prix'])) &&
    (!empty($_POST['type']))  ) {

        function insertbiere($database,$nombiere,$pourcentage,$brasserie,$prix,$idStyle) {
            $sql = "INSERT INTO bieres(nombiere,pourcentage,Brasserie,prix,Style_id) VALUES (''$_POST[nombiere]',''$_POST[pourcentage]',''$_POST[brasserie]',''$_POST[prix]',''$_POST[idStyle]')";
            $result = mysqli_query($database,$sql);
            return $result ? "La bière à été ajouté" : "L'insertion a échouée:".mysqli_error($database) ;
        }

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
<form action="" method="post">

Bière: <input type="text" name="nombiere" />
Pourcentage: <input type="number" name="pourcentage" />
Brasserie: <input type="text" name="Brasserie" />
Prix : <input type="number" name="prix" />
type <input type="text" name="type" />
 
<input type="submit" />
</form>

</body>
</html>

