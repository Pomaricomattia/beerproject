<?php 
session_start();

if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
echo'<html>';
echo'<head>';
echo'<p>Page de notre section membre</p>';
echo'<head>';

echo '<body>';
echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
echo '<br />';

echo '<a href="/deconnexion.php">Déconnection</a>';
}
else {
    echo 'Les variables ne sont pas déclarée';
}
?>