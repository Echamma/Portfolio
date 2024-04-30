<?php

$con = parse_ini_file("../../config.ini",true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = 'Experience';

include_once $app . "/frontend/views/head.view.php";
?>
<body>
<article class = "correctMargin projectDiv">
<h1>Computer Scientist</h1>
   <p>
       <strong>Position:</strong> Computer Scientist <br>
       <strong>Duration:</strong> June 2019 - Present <br>
       <strong>Company:</strong> InnovateTech Solutions <br>
       <strong>Location:</strong> Silicon Valley, CA
    </p>
    <p>
        <strong>Job Description:</strong> As a Computer Scientist at InnovateTech Solutions, I am responsible for researching, designing, and developing cutting-edge computer technologies and systems. My role involves collaborating with interdisciplinary teams to analyze complex problems and provide innovative solutions that improve efficiency, performance, and security. I actively contribute to experiments, prototype development, and stay updated with the latest advancements in computer science to drive technological innovation.
    </p>
</article>
<article class = "correctMargin projectDiv">
<h1>Data Scientist</h1>
    <p>
       <strong>Position:</strong> Data Scientist <br>
       <strong>Duration:</strong> January 2020 - March 2022 <br>
       <strong>Company:</strong> Insightful Analytics Inc. <br>
       <strong>Location:</strong> New York, NY
    </p>
    <p>
        <strong>Job Description:</strong> As a Data Scientist at Insightful Analytics Inc., I was responsible for analyzing large datasets to extract valuable insights and drive data-driven decision-making. I developed and implemented machine learning algorithms, predictive models, and data visualizations to support business objectives. Additionally, I collaborated with cross-functional teams to translate complex findings into actionable strategies, contributing to the company's success and growth.
    </p>
</article>
</body>

