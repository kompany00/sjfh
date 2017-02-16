<?php
include "conn/conn.php";
include "header.php";
?>

<div class="center">
    <h3>新闻</h3>
    <ul>

<?php
$query = "select title, id from sjfh_news";
$res = mysqli_query($dbc, $query);
$ret = mysqli_fetch_all($res, MYSQLI_ASSOC);
$len = count($ret);
$i = 0;

while($len - $i)
{
?>
    <li><a id="<?php echo "news_{$i}"?>" href="news.php?id=<?php echo "{$ret[$i]['id']}" ?>"><?php echo "{$ret[$i]['title']}" ?></a></li>

<?php
    $i++;
}
?>
    </ul>
</div>


<?php
include"footer.php";
?>
