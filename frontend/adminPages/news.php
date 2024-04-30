<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "News";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";
$apikey = '37563b40ef2b3cc79d687c33e1e483ec';
$url = "https://gnews.io/api/v4/search?q=example&lang=en&country=us&max=10&apikey=$apikey";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = json_decode(curl_exec($ch), true);
curl_close($ch);
$articles = $data['articles'];

foreach($articles as $article) {

    include($app . "/frontend/views/article.view.php");
}