<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";   
if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $sum = $_POST['sum'];
    $desc = $_POST['desc'];
    $lang = $_POST['lang'];
    $link = $_POST['link'];
    $imp = $_POST['imp'];
    $fun = $_POST['fun'];
    $db->add_project($title, $sum,$desc, $lang, $imp,$fun,$link);
    
    
}
if (!isset($_SESSION["LOGIN"]))
{
    header("location:" .  $url . "index.php")  ;
}

?>




    <form method="POST" action="" class ="correctMargin correctTextColor">
        <label><h2>Title:</h2></label>
        <input type="text" name="title" required/><br />
        <label><h2>Summary:</h2></label>
        <input type="text" name="sum" required/><br />
        <label><h2>Description:</h2></label>
        <br>
        <textarea style="height: 40vh; width: 30rem;" type="text" name="desc" required></textarea><br />
        <label><h2>Languages:</h2></label>
        <input type="text" name="lang" required/><br />
        <label><h2>Link:</label>
        <input type="text" name="link" required/><br />
        <label><h2>Improvements:</h2></label>
        <textarea style="height: 40vh; width: 30rem;" type="text" name="imp" required></textarea><br />
        <label><h2>Fun Fact:</h2></label>
        <input type="text" name="fun" required/><br />
        <button type="submit" />
    </form>
