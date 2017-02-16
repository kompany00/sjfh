<?php
/**
 * Created by PhpStorm.
 * User: elder
 * Date: 2017/2/15
 * Time: 11:48
 */
$db_username = "root";
$db_password = "root";
$db_host = "127.0.0.1";

$dbc = @mysqli_connect($db_host, $db_username, $db_password, "sjfh") or die("connect failed");
mysqli_set_charset($dbc, 'utf8');




?>