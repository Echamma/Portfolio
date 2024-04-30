<?php 
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/backend/dbHelper.php";

if(isset($_POST["pass"]))
{
    if(password_verify($_POST["pass"],$db->get_description('pass')[0]['decription']))
    {
        $_SESSION['LOGIN'] = true;
    }
    else
    {
        header('location:config.ini');
    }
}

?>
<nav>
    <ul class="navList">
        <li class = "navListItem"><a href= <?php echo $url . "/index.php"?>>Home</a></li>
        <li class = "navListItem"><a href= <?php echo $url . "frontend/pages/about.php"?>>About Me</a></li>
        <li class = "navListItem"><a href= <?php echo $url . "media/resume.pdf"?>>Resume</a></li>
        <li class = "navListItem"><a href= <?php echo $url . "frontend/pages/projects.php"?>>Projects</a></li>
	<li class = "navListItem"><a href= <?php echo $url . "frontend/pages/exp.php"?>>Experience</a></li>
        <li class = "navListItem"><a href= <?php echo $url . "frontend/pages/contact.php"?>>Contact</a></li>
        <li class = "navListItem"><a href="https://github.com/Echamma">Github</a></li>
        <li class = "navListItem"><a href="https://www.linkedin.com/in/elias-chamma-886aa2268/" >LinkedIn</a></li>
        <?php
        if(isset($_SESSION['LOGIN']))
        {
            if ($_SESSION['LOGIN'] == true)
            {?>
                <li class = "navListItem"><a href= <?php echo $url . "frontend/adminPages/add.php"?>>Aprojects</a></li>
                <li class = "navListItem"><a href= <?php echo $url . "frontend/adminPages/edit.delete.php"?>>EDprojects</a></li>
                <li class = "navListItem"><a href= <?php echo $url . "frontend/adminPages/feedback.php"?>>Feedback</a></li>
                <li class = "navListItem"><a href= <?php echo $url . "frontend/adminPages/news.php"?>>News</a></li>
          <?php  }
            else
            {
                echo "<form method=\"POST\" action = \"\">
                <input type=\"password\" name=\"pass\">
                <button type=\"submit\" class=\"backgroundButton\">Elias?</button>
            </form>";
            }
        }
        else
            {
                echo "<form method=\"POST\" action = \"\">
                <input type=\"password\" name=\"pass\">
                <button type=\"submit\" class=\"backgroundButton\">Elias?</button>
            </form>";
            }
        ?>
       
    </ul>
</nav>