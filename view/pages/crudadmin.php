<?php

function insertbiere($database,$nombiere,$pourcentage,$brasserie,$prix,$idStyle) {
    $sql = "INSERT INTO bieres(nombiere,pourcentage,Brasserie,prix,Style_id) VALUES ('$nombiere','$pourcentage','$brasserie','$prix','$idStyle')";
    $result = mysqli_query($database,$sql);
    return $result ? "La bière à été ajouté" : "L'insertion a échouée:".mysqli_error($database) ;
}





?>