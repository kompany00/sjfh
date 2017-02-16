<?php
/**
 * Created by PhpStorm.
 * User: elder
 * Date: 2017/2/15
 * Time: 11:48
 */

include "../conn/conn.php";
include "../header.php";

$updata_title = $_POST['title'];

$updata_news = $_POST['news'];

$updata_query = "insert into sjfh_news(title, news) VALUES('{$updata_title}','{$updata_news}')";

if(mysqli_query($dbc, $updata_query)){
    echo "secceed!";
}else{
    echo "failed to updata!";
}

?>



<?php

//$sql_query = ;
include"../footer.php";
?>