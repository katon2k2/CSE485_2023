<?php
require('../includes/connect.php');
require("../includes/test_input.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["txtAuthorName"])) {
      $nameErr = "Tên thể loại không được bỏ trống";
    } else {
      $name = test_input($_POST["txtAuthorName"]);
      $sql = "INSERT INTO tacgia (ten_tgia) VALUES ('$name');";
      $result = mysqli_query($conn,$sql);
      echo("Thanh cong");
    }
}
 ?> 