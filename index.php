<?php
$title = "home";
$config = parse_ini_file('config.ini', true);

$environment=  $config['ENVIRONMENT'];
$url = $config[$environment]['URL_ROOT'];
$app = $config[$environment]['APP_ROOT'];
include($app .'views/head.view.php');
include($app .'views/header.view.php');
include($app .'views/navbar.view.php');
?>


<body>
    <article>
        <article>
            <p id = "smallDescription">Hey I am Elias, Software Engineer based in the United States. I enjoy working with vavrious langauges such as C#,php, and python</p>
            <button><a href = <?php $url . 'src/projectspage.php'?>>Projects</a></button>
        </article>
        <img src = <?php echo $url . 'src/WhatsApp Image 2024-03-09 at 6.50.18 AM.jpeg'?>> </img>
    </article>
</body>