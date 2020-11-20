<?php

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
<h2>Tout les articles</h2>
<?php  
if(isset($erreur)):
?>
<h2><?=$erreur?></h2>
<?php 
else:
?>
<p class="nbrArticle"> Nombre d'article: <?=count($allbiere) ?></p>
<p class="Article"> Les article</p>
<?php 
foreach($allbiere as $item):
    ?>
    <h3> <?=$item["nombiere"] ?></h3>
    <p> Pourcentage: <?=$item ["pourcentage"]?></p>
    <p>Brasserie : <?=$item ["Brasserie"]?></p>
    <p>Prix : <?=$item ["prix"]?></p>
    

    <h5></h5>
<?php
endforeach;
?>

<?php 
endif;
?>
<h3> Ajouter un article </h3>
<form action="" name="insertion" method="post">
<?php 


?>
Bière:    <input class="article" type="text" name="nombiere" />
Pourcentage: <input class="pourcentage" type="number" name="pourcentage" />
Brasserie: <input class="brasserie" type="text" name="Brasserie" />
Prix : <input class="prix" type="number" name="prix" />
type <input class="typebiere"type="text" name="type" />
<input type="submit" value="ajoutArticle" name="Ajouter un article" />
<h3> Ajouter une image </h3>
<input name="nomdelimage" type="file" class="imageupload" placeholder="Votre image" >

</form>


</body>
</html>

