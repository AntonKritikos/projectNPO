<?php
$today = mktime();
$given_date = strtotime($_GET["date"]);
if (!$given_date || $given_date > $today) {
    $given_date = $today;
}

$query = "SELECT * FROM topsongs WHERE show_at='". strftime("%Y-%m-%d", $given_date) ."' ORDER BY song_nr ASC;";
//echo $query;
$result = $mysqli->query($query);
?>
<section id="home">
    <?= $_GET["page"] ?>
    <h1>Vandaag in de Radio 1 Tour Top 100</h1>
    <?php
    while($row = $result->fetch_assoc()) {
    ?>
    <div class="entry">
        <div class="songvid"><?= $row["song_embed_klein"] ?>
        </div>
        <div class="songheader">
            <div class="songnr"><?= $row["song_nr"] ?></div>
            <div class="songtitle"><?= $row["song_title"] . " : " . $row[song_singer]?></div>
        </div>
        <div class="songinfo"><?= $row["song_info"] ?></div>
        <div class="songfooter">
            <div class="songlinks">lees meer</div>
            <div class="songshare"><img src="./styles/images/mediaicons.png"> </div>

        </div>
    </div>
    <?php
    }
    $result->free();
    ?>

</section>