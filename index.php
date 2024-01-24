<?php
$title = 'About Me';

// Split the description into three paragraphs
$paragraphs = [
    '🌅 **Good Morning from Around the World!**

Greetings! I\'m Elias Chamma, an international student at Bemidji State University. Currently navigating through the realms of academia, I find joy in both connecting with my peers and delving into the world of coding during my free hours.',

    'My proficiency spans across a variety of languages, including C#, Python, HTML, CSS, PHP, and MySQL. I particularly relish the intricacies of data analysis and creating user-friendly interfaces, making C#, Python, and MySQL invaluable tools in my toolkit.',

    'Originally from the picturesque Lebanon in the Middle East – known for its delectable cuisine, warm-hearted people, and breathtaking nature – my journey led me to pursue education in the United States. From childhood dreams inspired by the notions of "The land of freedom and opportunity," I eventually found myself at Bemidji State University after a meticulous process, including a year of waiting for my Student Visa.

My educational voyage began at Oakland Community College, where I earned my Associates degree. A stint at Digi-Key as a Picking and Shipping Assistant followed, providing me with diverse experiences. Guided by my uncle, I eventually found my way to BSU, where the dynamic community has fueled my dedication to honing my skills and exploring unexpected projects.',

    'And now, a glimpse into the personal side: beyond the coding screens, I find joy in video games, thrive on meeting new people, and have an unabashed love for nature.

Join me on this expedition through education, technology, and a sprinkle of fun facts about yours truly!'
];

include_once 'header.php';
?>

<main class="abtme">
    <img src="pexels-jo-kassis-5054982.jpg" alt="" style="width: 250px; height: 400px;">

    <article class="paragraphs">
        <?php
        // Output paragraphs with line breaks
        foreach ($paragraphs as $paragraph) {
            echo "<p>$paragraph</p>\n";
        }
        ?>
    </article>
</main>
<?php
include_once "footer.php";
?>