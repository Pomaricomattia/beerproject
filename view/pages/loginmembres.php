<?php
$login_valide = "moi";
$pwd_valide = "mdp";
if (isset($_POST['login']) && isset($_POST['pwd'])) {


    if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {

    session_start ();
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pwd'] = $_POST['pwd'];
    header ('location: accueil_membre.php');
    }
    else {
        echo 'Membre non reconnu';
    }
}
else {
    echo 'Les variables du formulaire ne sont pas déclarées.';
}


?>