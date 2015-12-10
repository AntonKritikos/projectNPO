<header>
    <div id="logo">
        <a href="#"><img src="styles/images/logo.png"></a>
    </div>

    <!--<div id="menu">
        <p>Radio1.nl</p>
        <p>Tour Top 100</p>
        <form method="post" action="?page=search" id="searchform">
            <input type="text" name="search_string">
            <input type="submit" name="submit" value="Search">
        </form>
    </div>-->

    <div id="menu">
        <ul>
            <li><a href="http://www.radio1.nl" class="radio1link">&nbsp;</a></li>
            <li><form method="post" action="?page=search" id="searchform">
                    <input id="searchbox" type="text" name="search_string"  placeholder="Zoek binnen Radio1">
                    <input id="searchbutton" type="submit" name="submit" value="">
                </form></li>
        </ul>

    </div>

    <div id="subnav">
        <ul>
            <li><a href="#">nieuwsbrief</a></li>
            <li><a href="#">mobiel</a></li>
            <li><a href="#">contact</a></li>
            <li><a href="#">meld een fout</a></li>
            <li><a href="#">frequenties</a></li>
            <li><a href="#">help</a></li>
            <li><a href="#">rss</a></li>
        </ul>

    </div>

    <div id="changefontsize">

        <div id="sizeUp">bigger text</div>
        <div id="normal">normal text</div>
        <div id="sizeDown">smaller text</div>

    </div>

    <div id="navtourtop100">
        <img src="./styles/images/tourtop100.png">
    </div>

    <div id="datum">
        <h3>Juli</h3>
        <ul id="dagen">
            <?php
            $offset = 0;
            $current_date = mktime(0, 0, 0, 12, 2, 2015);
            while ($offset < 23) {
                if ($current_date < mktime(0,0,0)) {
                    $date_class = "past";
                } else if ($current_date == mktime(0,0,0)) {
                    $date_class = "today";
                } else {
                    $date_class = "future";
                }
                ?>
                  <li class="<?php echo $date_class; ?>"><?php echo date("d", $current_date) ?></li>
                <?php
                $offset += 1;
                $current_date = strtotime("+ 1 days", $current_date);
            }
            ?>

        </ul>
    </div>

    <div id="fietser">
        <img src="styles/images/graphicfietser.png">
    </div>

    <div id="luistermee">

    </div>
</header>