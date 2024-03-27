<?php 

include_once("head.view.php");
?>

<header>
    <h1><?php echo $title?></h1>
    <nav>
        <ul>
            <li><a href=<?php echo $URL_BASE . "/index.php"?>>Home</a></li>
            <li><a href=<?php echo $URL_BASE . "/articles/Aboutme.php"?>>About Me</a></li>
            <li><a href=<?php echo $URL_BASE . "/articles/Assignments.php"?>>Assignments</a></li>
            
        </ul>
    </nav>
</header>
