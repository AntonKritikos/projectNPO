<?php
$param = mysqli_escape_string($mysqli, $_GET["song_id"]);
$query = "SELECT * FROM topsongs WHERE song_id=" . $param . " ORDER BY song_nr ASC;";
$result = $mysqli->query($query);
$song = $result->fetch_assoc();
?>
<section id="songdetail">
    <h1><?= $song["song_title"] ?></h1>

    <div class="songdetails">
        <div class="lastsong">
        </div>

        <div class="currentsong">
        </div>

        <div class="nextsong">
        </div>

        <div class="songvidbig">
            <?= $song["song_embed"] ?>
        </div>

        <div class="songinfo">

        </div>

        <div class="socialmedia">

        </div>

        <div class="reageren">

            <form method="post" action="#">
                <p>Naam</p>
                <input type="text" name="songreactname">
                <p>E-mail (wordt niet getoond)</p>
                <input type="text" name="songreactmail">
                <p>Website</p>
                <input type="text" name="songreactmail">
                <p>Reactie</p>
                <input type="text" name="songreactmail">
                <input type="submit" value="Verstuur">
            </form>

        </div>
    </div>

</section>