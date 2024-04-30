<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "Projects";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";


?>


    <?php 
    foreach( $z as $project ) 
    {
        include($app . "/frontend/views/singleProjectView.php");
    }
    
    ?>
