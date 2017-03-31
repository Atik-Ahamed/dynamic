<?php
//setup file
#database connection here....
$dbc = mysqli_connect('localhost', 'utso', '1503090', 'keltuproject') OR die('Error Because:' . mysqli_connect_error());
#Constatns:
DEFINE('D_TEMPLATE','template');


#Functions:
include ('functions/data.php');
$site_title = 'Keltu website';
if (isset($_GET['page'])) {
    $pageid = $_GET['page'];
} else {
    $pageid = 1;
}
#page setup

$page = data_page($dbc, $pageid);
?>