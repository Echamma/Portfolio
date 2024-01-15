<?php
$title = 'Assignments';
$assignments = ['Assignment1' => ['Questions'=>['Q1: Why are you taking this class?','Q2: What do you want to take away from this class?'], 'Answers' => ['A1: I need credits to graduate','A2: Use GitHub API to automatically link to my website']]];

include_once 'head.php';
?>

<article class="assignmentsMe">
    <article class="articleAssignments">
        <?php
        foreach ($assignments as $assignmentName => $assignmentDetails) {
            echo "<p class=\"ps\">$assignmentName:</p>\n";

            foreach ($assignmentDetails['Questions'] as $index => $question) {
                $answer = $assignmentDetails['Answers'][$index];
                echo "<b><p class=\"ps\">$question \n <br> <br>$answer</p></b>\n";
            }
        }
        ?>
    </article>
</article>
<?php
include_once "footer.php";
?>