<?php

function connectDBModel(){
    $connect = @mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_PORT);
    if(mysqli_connect_errno()){
        return false;
        die();
        // die("Erreur : ".mysqli_connect_error()."<br>Numéro d'erreur : ".mysqli_connect_errno());
    }
    mysqli_set_charset($connect,DB_CHARSET);

    return $connect;
    
}

?>