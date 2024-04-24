<?php
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";

if (isset($_POST['title'])) {
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $lang = $_POST['lang'];
    $imp = $_POST['imp'];
    $fun = $_POST['fun'];
    $db->add_project($title, $desc, $lang, $imp, $fun);
}
?>



<form method="POST" action="projects.php">
    <label>Title:</label>
    <input type="text" name="title" required/><br />
    <label>Description:</label>
    <input type="text" name="desc" required/><br />
    <label>Languages:</label>
    <input type="text" name="lang" required/><br />
    <label>Improvements:</label>
    <input type="text" name="imp" required/><br />
    <label>Fun Fact:</label>
    <input type="text" name="fun" required/><br />
    <input type="submit" />
</form>

<pre>
    <?php
    print_r($_POST)
    ?>
</pre>

