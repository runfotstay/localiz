<?php

$lang = trim((string)$_SERVER["REQUEST_URI"], "/");

switch ($lang) {
    default:
    case 'ru':
        $result = include 'langs/ru/cont.php';
        break;
    case 'en':
        $result = include 'langs/en/cont.php';
        break;
    case 'pl':
        $result = include 'langs/pl/cont.php';
        break;
}

include 'html/include/header/header.php';
include 'html/include/services/services.php';
include 'html/include/portfolio/portfolio.php';
include 'html/include/order/order.php';
include 'html/include/contact us/contact_us.php';
include 'html/include/footer/footer.php'

?>
