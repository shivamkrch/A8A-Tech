<?php
function connect() {
    $link= mysqli_connect("localhost", "root", "", "a8atech_db");
if (!$link) {
    die("Unable to connect");    
}
    return $link;
}
function dateFilter($date) {
$today = new DateTime(); // This object represents current date/time
$today->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

$match_date = DateTime::createFromFormat( "Y-m-d", $date );
$match_date->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

$diff = $today->diff( $match_date );

switch( $diff->days ) {
    case 0:
        return "Today";
       
    case 1:
        return "Yesterday";
     
    default:
        return date_format($match_date, "jS M 'y");
}
}
function categoryCheck($category) {
    switch ($category) {
        case "mob":
            return "Mobiles";
        case 'pcs':
            return "PCs";
        case 'scm':
            return 'Social Media';
        case 'oth':
            return 'Others';
    }
}
function getFirstImage($str) {
    $imgArr[]= explode(",", $str);
    echo $imgArr[0];
}




