<?php

session_start();


$db = mysqli_connect("127.0.0.1","root","","projectbeer","3306") OR die("La connection à la base de données a echouée");
mysqli_set_charset($db, "utf8");

if (isset($_GET['page'])) {
    $page = $_GET["page"];


switch ($page) {
    case "Accueil":
        require_once "view/pages/accueil.php";
    break;
    case "Contact":
        require_once "view/pages/Contact.php";
    break;
    case "Presentation":
        require_once "view/pages/Presentation.php";
    break;
    case "Catalogue":
        require_once "view/pages/Catalogue.php";
    break;
    default:
        require_once "view/pages/accueil.php";
    
}
}
?>

