<?php
$title = "HOME";
define('URL_ROOT', 'http://localhost:3000');
define('ABS_ROOT', __DIR__);


$data = [
    "Projects"=> 
    [
        "title"=> "Organization Board",
        "Language" => "C#",
        "link" => "https://github.com/lalousBTW/OrganizationBoard",
        "Img"=> "/media/git.png",
        "Description"=> "Used C# to make an Organization board that has a TODO List and list of what you have done.
                         for each project it creates a CSV file that is how we save the data into two columns as todo and Done.
                         Then each time the app opens and you select the project it reads through the CSV file to show you your
                         todo list and done list.",
    ],
    [
        "title" => "Airfare Data Analysis",
        "Language"=> "SQL",
        "link" => "#",
        "Img"=> "/media/git.png",
        "Description"=> "Used SQL inside a Microsoft Access Database to clean and preprocess data. While applying multi-linear regression for airfare prediction",
    ],
    [
        "title" => "CSV data Manipulation and Extraction",
        "Language" => "Python",
        "link" => "https://github.com/lalousBTW/WebscraperCSVtoMySQL",
        "Img"=> "/media/git.png",
        "Description" => "Used Python to webscrape data from a website and save it to a csv file and then add it to a MySQL database"  
    ]
];


include_once(ABS_ROOT . "/src/views/header.php");

?>
<link rel="stylesheet" href="homePageStyling.css">
<main>
<?php foreach($data as $project){
        ?>
    <article>
    
        
        
        <a href = <?php echo $project["link"]?>> <img src= <?php echo URL_ROOT . $project["Img"]?> alt=""> </a> 
    
        <div>
        <h2><?php echo $project["title"]?></h2>
        <p><?php echo $project["Description"]?></p>
        </div>
        
    </article>
    <?php
        }
        ?>
</main>