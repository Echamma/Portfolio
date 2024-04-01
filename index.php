<?php
$title = "home";
$config = parse_ini_file('config.ini', true);
$environment= $config['ENVIRONMENT'];
$url = $config[$environment]['URL_ROOT'];
$app = $config[$environment]['URL_ROOT'];

