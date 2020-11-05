<?php


require_once "config.php";


$db = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME,DB_PORT) OR die("La connection à la base de données a echouée");
mysqli_set_charset($db, "utf8"); 



if (isset($_GET['page'])) {
    
switch ($_GET['page']){
    case "Contact":
        require_once "view/pages/Contact.php";
    break;
    case "Presentation":
        require_once "view/pages/Presentation.php";
    break;
    case "Catalogue":
        require_once "view/pages/Catalogue.php";
    break;
    case "crudadmin":
        require_once "view/pages/crudadmin.php";
    break;
    default:
        require_once "view/pages/accueil.php";  
}
}else {
     require_once "view/pages/accueil.php";
}

?>

