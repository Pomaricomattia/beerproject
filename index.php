<?php
session_start();
//dépendances
require_once "config.php";
require_once "model/connectDBModel.php";


$db = connectDBModel();

if(!$db){
    include "view/pages/errorConnectView.php";           
    
    die();
}



if(isset($_SESSION['identifiant'])&&$_SESSION['identifiant']==session_id()){
    
    require_once "controller/adminController.php";
    
}



//loadingcontrolleur frontal

require_once "controller/publiccontroller.php";

?>


