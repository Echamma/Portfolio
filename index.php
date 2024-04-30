<?php
session_start();
$con = parse_ini_file("config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";
?>
<form method="POST">    
    <article class = "description correctMargin">
    <h2 class = "underLine">Introduction</h2>
    <p class="hidden correctTextColor">
        Hello I am Elias and this is my Portfolio Website. <br>
        It is simple and direct. <br>
        If questions arise use the contact me page or click here and I will respont to you in about 1 - 2 bussiness days. <br>
        I also hope u have a good day. <br>
        :D
    </p>
    </article>
    
    <article class = "description correctMargin">
        <h2 class = "underLine">Skills</h2>
        <ul class = "hidden">
            <li class = "iconLi"><img class = "icon "src="<?= $url . 'media/csharp.png'?>"></li>
            <li class = "iconLi"><img class = "icon "src="<?= $url . 'media/html.png'?>"></li>
            <li class = "iconLi"><img class = "icon "src="<?= $url . 'media/java-script.png'?>"></li>
            <li class = "iconLi"><img class = "icon "src="<?= $url . 'media/java.png'?>"></li>
            <li class = "iconLi"><img class = "icon "src="<?= $url . 'media/mysql.png'?>"></li>
            <li class = "iconLi"><img class = "icon "src="<?= $url . 'media/php.png'?>"></li>
            <li class = "iconLi"><img class = "icon "src="<?= $url . 'media/python.png'?>"></li>
        </ul>
    </article>
</form>
