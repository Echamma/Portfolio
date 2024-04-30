<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "feedbackAdmin";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";
if (!isset($_SESSION["LOGIN"]))
{
    header("location:" .  $url . "index.php")  ;
}

if(isset($_POST['email'])) {
    $db->delete_feedback($_POST['email']);
}

?>


    <?php 
    foreach( $f as $feedback ) 
    {
        include($app . "/frontend/views/feedbackview.php");
    }
    
    ?>

<form class = "correctMargin" method="post">
    <label><h2>Email:</h2></label>
    <input type="text" name = "email"></input>
    <button class = "buttonBackground" type = "submit">DELETE FEEDBACK</button>
</form>