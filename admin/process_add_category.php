<?php
require('../includes/connect.php');
require("../includes/test_input.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["txtCatName"])) {
      $nameErr = "Tên thể loại không được bỏ trống";
    } else {
      $name = test_input($_POST["txtCatName"]);
      $sql = "INSERT INTO theloai (ten_tloai) VALUES ('$name');";
      $result = mysqli_query($conn,$sql);
      echo("Thanh cong");
    }
}
 ?> 