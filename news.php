<?php
include "conn/conn.php";
include "header.php";
?>


<?php

$news_id = $_GET['id'];
$get_news_query = "select title, news from sjfh_news where id = {$news_id}";
$res = mysqli_query($dbc, $get_news_query);
$ret = mysqli_fetch_all($res, MYSQLI_ASSOC);

$title =  $ret[0]['title'];
$news = $ret[0]['news'];
?>

<h3><?php echo $title?></h3>
<p><?php echo $news?></p>

<?php
include"footer.php";
?>
