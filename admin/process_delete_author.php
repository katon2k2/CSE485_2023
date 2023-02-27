
<?php
require('../includes/connect.php');
$Author_id = $_GET["id"];
echo $Author_id;
$sql = "ALTER TABLE baiviet;";
$sql1=" SET FOREIGN_KEY_CHECKS=0;";
$sql2="
ALTER TABLE theloai;";
$sql3=" DELETE FROM tacgia WHERE tacgia.ma_tgia = $Author_id;";
$sql4="ALTER TABLE baiviet;";
$sql5="SET FOREIGN_KEY_CHECKS=1";

$result = mysqli_query($conn, $sql);
$result = mysqli_query($conn, $sql1);

$result = mysqli_query($conn, $sql2);

$result = mysqli_query($conn, $sql3);
$result = mysqli_query($conn, $sql4);
$result = mysqli_query($conn, $sql5);



echo ("Thanh cong");
?>