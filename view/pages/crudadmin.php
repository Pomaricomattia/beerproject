<?php
$db = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_PORT) OR die("La connection à la base de données a echouée");
mysqli_set_charset($db, "utf8");

function getAllUsers(){
    $sql = "SELECT * FROM admin";
    
} 
function readUser($id){

} 
function createUser($pseudo,$email,$motdepasse){

} 
function updateUser($id,$pseudo,$email,$motdepasse){

} 
function deleteUser($id){

}



// Crud catalogue
function insertbiere($database,$nombiere,$pourcentage,$brasserie,$prix,$idStyle) {
    $sql = "INSERT INTO bieres(nombiere,pourcentage,Brasserie,prix,Style_id) VALUES ('$nombiere','$pourcentage','$brasserie','$prix','$idStyle')";
    $result = mysqli_query($database,$sql);
    return $result ? "La bière à été ajouté" : "L'insertion a échouée:".mysqli_error($database) ;
}
function updatebiere(){

} 
function deletebiere(){
    
} 
function Updatebiere(){
    
} 
function Updatebiere(){
    
} 

?>