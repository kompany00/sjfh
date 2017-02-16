<?php
include "conn/conn.php";
include "header.php";
?>


<?php
$query = "select title, id from sjfh_news";
$res = mysqli_query($dbc, $query);
$ret = mysqli_fetch_all($res, MYSQLI_ASSOC);
$len = count($ret);


while($len)
{
?>

    <a href="news.php?id=<?php echo "{$ret[2-$len]['id']}" ?>"><?php echo "{$ret[2-$len]['title']}" ?></a>


<?php
    $len -= 1;
}
include"footer.php";
?>
