<?php
session_start();
$con = parse_ini_file("config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";

if(isset($_POST['desc_edit'])) {
    $db->edit_home($_POST['desc_edit'],'home_description');
}
$_SESSION['login'] = false;
?>

<form method="POST">
    <div>
    <?php
    if($_SESSION['login'] ==true)
    {
        echo "<h2 class = 'Underline'>About</h2>";
        echo '<p>' . (string)$db->get_description('about_me')[0]['decription'] . '</p>' . PHP_EOL;
        echo "<h2 class = 'Underline'>Experience</h2>";
        echo '<p>' . (string)$db->get_description('experience')[0]['decription'] . '</p>' . PHP_EOL;
    }
    else
    {
        echo '<input type = "text" name = "desc_edit">' . $db->get_description('home_description')[0]['decription'] . '</input>'. PHP_EOL;
        echo '<input type="submit" />';
    }
    ?>
    <ul>
        <li><img src="<?= $url . 'media/'?>"></li>
        <li><img src="<?= $url . 'media/'?>"></li>
        <li><img src="<?= $url . 'media/'?>"></li>
        <li><img src="<?= $url . 'media/'?>"></li>
        <li><img src="<?= $url . 'media/'?>"></li>
        <li><img src="<?= $url . 'media/'?>"></li>
    </ul>
    </div>

</form>
