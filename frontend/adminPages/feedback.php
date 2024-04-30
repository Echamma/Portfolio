<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "feedbackAdmin";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";


?>


    <?php 
    foreach( $f as $feedback ) 
    {
        include($app . "/frontend/views/feedbackview.php");
    }
    
    ?>
