
<?php
require('../includes/connect.php');
$artical_id = $_GET["id"];


$sql=" DELETE FROM baiviet WHERE baiviet.ma_bviet = $artical_id;";

$result = mysqli_query($conn, $sql);

header('Location: article.php');


echo ("Thanh cong");
?>