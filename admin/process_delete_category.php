<?php
require('../includes/connect.php');
$Catid = $_GET["id"];
echo $Catid;
$sql = "ALTER TABLE baiviet;";
$sql1=" SET FOREIGN_KEY_CHECKS=0;";
$sql2="
ALTER TABLE theloai;";
$sql3=" DELETE FROM theloai WHERE theloai.ma_tloai = $Catid;";
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