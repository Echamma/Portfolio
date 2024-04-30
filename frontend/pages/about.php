<?php
session_start();
$con = parse_ini_file("../../config.ini", true);
$env = $con['ENV'];
$url = $con[$env]['URL'];
$app = $con[$env]['APP'];
$title = "HOME";
include_once $app . "/frontend/views/head.view.php";
include_once $app . "/backend/dbHelper.php";

?>


<article class = "description correctMargin correctTextColor aboutMe">
    <img src="<?= $url . 'media/myFace.jpeg' ?>" class = "myFace">
    <div class = "padMeDaddy">
        <h2 class = "underLine">About Me</h2>
        <p class = "hidden">Greetings, I'm Elias Chamma, and I'm thrilled to offer you a glimpse into my life's journey. Originally from the enchanting landscapes of Lebanon, I've found a new sense of belonging amidst the serene surroundings of Bemidji, Minnesota.
            <br>
            <br>
        At the core of my being lies a deep passion for computer science, ignited by my curiosity about the inner workings of the digital world. My pursuit of knowledge in algorithms and coding has been nothing short of exhilarating, marking significant milestones in my career with each new challenge I undertake.
        <br>
        <br>
        However, amidst the hustle and bustle of technology, I find solace in the tranquil embrace of nature—a love instilled in me by the awe-inspiring beauty of Lebanon's landscapes. Now, nestled in the heart of Minnesota, I've discovered a harmonious balance between my two passions. Whether immersing myself in coding projects or embarking on outdoor adventures, each experience enriches my life in its own unique way.
        <br>
        <br>

        With a penchant for leveraging the power of the .NET framework, I derive immense joy from creating applications that not only showcase my technical expertise but also make a tangible impact in solving real-world problems.
        <br>
        <br>

        As I navigate this journey, I'm eager to connect with fellow enthusiasts who share my unwavering enthusiasm for both technology and the wonders of the natural world. Together, let's embark on a journey of exploration, innovation, and meaningful connections.
    </div>
</p>
</article>
<article class="description correctMargin">
    <h2 class="underLine">Education</h2>
      <p class="hidden show">Senior At BemidjiState University </p>
        <p class="hidden show">Associates Degree in Arts from Oakland Community College
        </p>
</article>
<article class = "description correctMargin">
        <h2 class = "underLine">Skills</h2>
        <ul class = "hidden">
            <li class = "elTitleOfSkil">
                <h2>C#</h2>
                <p>
                    C# is by far my favorite langauge. <br>
                    I have made multiple scripts in it that connect to a MySQL to transfer data over to an excel file <br>
                    I have also made an organization board in winforms. There is to be many improvements made<br>
                    I still have alot to learn about this langauge espcially working with the .Net framework 
                </p>
            </li>
            <li class = "elTitleOfSkil">
                <h2>HTML</h2>
                <p>
                    I enjoy making static webpages with html and css for random friends and family. <br>
                    I made a happy birthday page for my nephew and well this site that you are looking at was made with html, css, javscript, and php
                </p>
            </li>
            <li class = "elTitleOfSkil">
                <h2>JAVASCRIPT</h2>
                <p>
                    Animations are cool such as the one that made this one appear. <br>
                    I also have some React Native experience and .nodejs when working on an instagram clone
                </p>
            </li>
            <li class = "elTitleOfSkil">
                <h2>JAVA</h2>
                <p>
                    This was the first langauge I learned and has a special place in my heart <br>
                    OOP was a great class to have relearned it. <br>
                    I have made multiple applications using Java, espcially something like small console Dungeons and Dragon games. <br>
                    and a basic calculator. 
                </p>
            </li>
            <li class = "elTitleOfSkil">
                <h2>MySQL</h2>
                <p>
                    SQL databases have been amazing to work in. <br>
                    The langauge was easy to learn and integrating it into the apps I make is amazingly simple <br>
                    For example: This webside has a CRUD functionality in an admin page that is hidden. And it uses and SQL database to<br>
                    create,read,update,and delete projects
                </p>
            </li>
            <li class = "elTitleOfSkil">
                <h2>PHP</h2>
                <p>
                    Above I said C# was my favorite langauge <br>
                    This is a close second, XAMPP has been a great help to integrate a development SQL server for testing my applications <br>
                    Yes this is where the CRUD application for this site is made
                </p>
            </li>
            <li class = "elTitleOfSkil">
                <h2>PYTHON</h2>
                <p>
                    Python has been a great help in my datamining class <br>
                    It has helped me make ANN's and made data organization alot simpler
                </p>
            </li>
        </ul>
    </article>
