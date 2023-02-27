<?php
require('../includes/connect.php');
require("../includes/test_input.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["txtAuthorName"])) {
      $nameErr = "Tên tac gia không được bỏ trống";
    } else {
      $name = test_input($_POST["txtAuthorName"]);
      $Authorid = $_POST["txtAuthorId"];

      $sql = "UPDATE `tacgia` SET`ten_tgia`='$name' WHERE ma_tgia = $Authorid";
      $result = mysqli_query($conn,$sql);
      echo("Thanh cong");
    }
}
 ?>