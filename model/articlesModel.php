<?php
function biereLoadAll($connectdb){
    $req = "SELECT * FROM bieres  ; ";
    $recup = mysqli_query($connectdb,$req);
    if (mysqli_num_rows($recup)){
        return mysqli_fetch_all($recup,MYSQLI_ASSOC);
    }
    return false;

}

function insertBiere($connectdb) {
    $sql = "INSERT INTO bieres(nombiere,pourcentage,Brasserie,prix,Style_id) VALUES ('$nombiere')";
    $result = mysqli_query($connectdb,$sql);
    return $result ? "La bière à été ajouté" : "L'insertion a échouée:".mysqli_error($connectdb) ;
}

function deletebiere(){
    
} 

function Updatebiere(){
    
} 
/*function insertBiere($connectdb,$nombiere,$pourcentage,$brasserie,$prix,$idStyle) {
    $sql = "INSERT INTO bieres(nombiere,pourcentage,Brasserie,prix,Style_id) VALUES ('$nombiere','$pourcentage','$brasserie','$prix','$idStyle')";
    $result = mysqli_query($connectdb,$sql);
    return $result ? "La bière à été ajouté" : "L'insertion a échouée:".mysqli_error($connectdb) ;
}*/
?>
 