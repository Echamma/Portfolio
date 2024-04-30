
<div class="correctMargin projectDiv">
    <form action="<?= $url . "frontend/views/fulldesc.php"?>" method="get">
    <p name = "title">Title:<?= $project['title']?> </p>
    <p>Summary: <br><?= $project['summary']?><br>Languages:<?= $project['lang']?></p>
<br><a href = "<?= $project['link']?>">Github</a><br><input name="id" value="<?= $project['ID']?>" class = "correctTextColor"></input>
<button type="submit" class = "correctTextColor backgroundButton">Full Description</button>
    </form>
</div>