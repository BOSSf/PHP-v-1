<?php
include "include/connexion.php";
$controller = "livre";
$action="liste";

if (isset($_REQUEST['controller'])){
$controllers = $_REQUEST['controller'];
}

if (isset($_REQUEST['action'])){
    $action = $_REQUEST['action'];
}

include "controllers/".$controller.".controller.php";