<?php
require_once "model/articlesModel.php";
require_once "model/userModel.php";


if(isset($_GET['p'])&&$_GET['p']=="connect"){
    var_dump($_POST);
    
    if(isset($_POST['pseudo'],$_POST['motdepasse'])){
        $login = htmlspecialchars(strip_tags(trim($_POST['pseudo'])),ENT_QUOTES);
        $pwd = htmlspecialchars(strip_tags(trim($_POST['motdepasse'])),ENT_QUOTES);
        
        $connexion = connectUser($db,$login,$pwd);
        
        //connexion reussie
        if($connexion){
            $_SESSION = $connexion; 

            $_SESSION['identifiant']=session_id();
            var_dump();
            header("Location: ./");
            exit();



        }else{
            $erreur =" Login ou mot de passe incorrecte";
        }
    }

    //view
    require_once "view/pages/connectView.php";
    
    exit();
}



    $allbiere = biereLoadAll($db);
 //$insertbiere =  insertBiere($db);

if(!$allbiere){
    $erreur = "Pas encore d'article";
    
}
//require_once "view/pages/Catalogue.php";
    //exit(); 
    //if($insertbiere){
   // $erreur = "l'article n'a pas été inséré";
 //}
//view
//require_once "view/pages/Contact.php";

require_once "view/pages/accueil.php";

?>