<?php
require('../includes/connect.php');
require("../includes/test_input.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["txtCatName"])) {
      $nameErr = "Tên thể loại không được bỏ trống";
    } else {
      $name = test_input($_POST["txtCatName"]);
      $Catid = $_POST["txtCatId"];
      echo $name;
      echo $Catid;
      $sql = "UPDATE `theloai` SET`ten_tloai`='$name' WHERE ma_tloai = $Catid";
      $result = mysqli_query($conn,$sql);
      echo("Thanh cong");
    }
}
 ?>