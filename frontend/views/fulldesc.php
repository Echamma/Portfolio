<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";

$project = $db->get_project($_GET['id']);

?>
<div class = "correctTextColor correctMargin">
<h2><?= $project[0]['title']?></h2>

<h3>Full Description</h3>
<article>
    <?= $project[0]['fullDesc']?>
</article>

<h3>Improvements</h3>
<article>
    <?= $project[0]['imp']?>
</article>
</div>