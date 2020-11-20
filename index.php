<?php

//dépendances
require_once "config.php";
require_once "model/connectDBModel.php";


$db = connectDBModel();

if(!$db){
    include "view/pages/errorConnectView.php";
    
    die();
}
var_dump($db);


//loadingcontrolleur frontal

require_once "controller/publiccontroller.php";

?>


