
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= $url . "frontend/style.css"?>">
    <script defer src = "<?= $url . "script.js"?>"></script>
</head>
<?php
include($app . "/frontend/views/header.view.php");
include_once($app ."/frontend/views/nav.view.php");
?>