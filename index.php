<?php
session_start();


$db = mysqli_connect(DB_HOST,DB_USERNAME,DB_PWD,DB_NAME, DB_PORT) OR die("La connection à la base de données a echouée");
mysqli_set_charset($db, DB_CHARSET);

if (isset($_GET['page'])) {
    $page = $_GET["page"];


switch ($page) {
    case "Accueil":
        require_once "pages/accueil.php";
    break;
    case "Contact":
        require_once "pages/Contact.php";
    break;
    case "Presentation":
        require_once "pages/Presentation";
    break;
    case "Catalogue"
        require_once "pages/Catalogue";
    break;
    default:
        require_once "pages/accueil.php";
    
}
} else { 
    require_once "pages/accueil.php"

}
?>