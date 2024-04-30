<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";
if(isset($_GET['id']))
{
    $db->delete_project($_GET['id']);
}
if(isset($_POST["id"]))
{
    $project = $db->get_project($_POST["id"]);
    print($project[0]['title']);
}

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $sum = $_POST['sum'];
    $desc = $_POST['desc'];
    $lang = $_POST['lang'];
    $link = $_POST['link'];
    $imp = $_POST['imp'];
    $fun = $_POST['fun'];
    $id = $_POST['id'];
    $db->update_project($title, $sum,$desc, $lang, $link,$imp, $fun, $id);
}
?>
<form method="POST" action="" class ="correctMargin correctTextColor">
    <label><h2>ID:</h2></label>
    <input type="text" name="id" required/><br />
    <button type="submit" class = "backgroundButton">Choose To Edit</button>
</form>

<form method="POST" action="" class ="correctMargin correctTextColor">
    <label><h2>Title:</h2></label>
    <input type="text" name="title" value="<?=  $project[0]['title'] ?? ""?>" required/><br />
    <label><h2>Summary:</h2></label>
    <input type="text" name="sum" value="<?=  $project[0]['summary'] ?? ""?>" required/><br />
    <label><h2>Description:</h2></label><br>
    <textarea style="height: 40vh; width: 30rem;" type="text" name="desc" value="<?=  $project[0]['fullDesc'] ?? ""?>" required></textarea><br />
    <label><h2>Languages:</h2></label>
    <input type="text" name="lang" value="<?=  $project[0]['lang'] ?? ""?>" required/><br />
    <label><h2>Link:</h2></label>
    <input type="text" name="link" value="<?=  $project[0]['link'] ?? ""?>" required/><br />
    <label><h2>Improvements:</h2></label><br>
    <textarea style="height: 40vh; width: 30rem;" name="imp" value="<?=  $project[0]['imp'] ?? ""?>" required></textarea><br />
    <label><h2>Fun Fact:</h2></label>
    <input type="text" name="fun" value="<?=  $project[0]['fun'] ?? ""?>" required/><br />
    <label><h2>ID:</h2></label>
    <input type="text" name="id" value="<?=  $project[0]['ID'] ?? ""?>" required/><br />
    <button type="submit" class = "backgroundButton"> Edit</button>
</form>

<form method="GET" action="" class ="correctMargin correctTextColor">
    <label><h2>ID:</h2></label>
    <input type="text" name="id" required/><br />
    <button type="submit" class = "backgroundButton"> DELETE</button>
</form>
