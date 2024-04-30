<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "Contact";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";
if(isset($_POST['email']) )
{
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    $db->add_feedback($email,$feedback);
}
?>
<form method="post" class = "correctMargin correctTextColor">
<div>
<p>Email:</p>
<input  type="text" name="email" id="blog-title">
</div>
<p class="form-title">Feedback:</p>
<div>
<textarea  name="feedback" id="blog-content" style="height: 40vh; width: 30rem;"></textarea><br>
<button type = "Submit" class = "backgroundButton">Send Message</button>
</div>
</form>
