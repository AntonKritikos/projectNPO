<?php

require 'includes/config.php';
require_once 'includes/database.php';

include 'views/head.php';

include 'views/header.php';

$page = $_GET["page"];

switch($page){
    case 'home':

       include 'views/home.php';

        break;

    case 'detail':
        include 'views/songdetail.php';
        break;
    case 'prijsvraag':

       include 'views/prijsvraag.php';

        break;

    case 'testimonials':

       include 'views/testimonials.php';

        break;

    case 'top100lijst':

        include 'views/top100.php';

        break;

    default;
        //include 'views/songdetail.php';
        include 'views/home.php';
        break;

}

include 'views/rechts.php';

include 'views/footer.php';