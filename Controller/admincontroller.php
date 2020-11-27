<?php
require_once "model/userModel.php";
require_once "model/disconnectModel.php";

if(isset($_GET['p'])&&$_GET['p']=="disconnect"){
    disconnectModel();
    header("location: ./");
    exit;
}
?>