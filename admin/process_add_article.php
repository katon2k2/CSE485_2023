<?php
require('../includes/connect.php');
require("../includes/test_input.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if (empty($_POST["txt_tieude"])&&empty($_POST["txt_tenbaihat"])&&empty($_POST["txt_tomtat"])) {
    //   $nameErr = "không được bỏ trống";
    // } else {
      $tieude = test_input($_POST["txt_tieude"]);
      $tenbaihat = test_input($_POST["txt_tenbaihat"]);
      $theloai =($_POST["option_Theloai"]);
      
      $tomtat = test_input($_POST["txt_tomtat"]);
      $noidung = test_input($_POST["txt_noidung"]);
      $tacgia =($_POST["option_tacgia"]);
      $ngayviet = ($_POST["txt_ngayviet"]);
      echo($tacgia);

      //
      $target_dir = "uploads/";
      $hinhanhpath = basename($_FILES["hinhanh"]["name"])."";
      $target_file = $target_dir . $hinhanhpath;
      if(move_uploaded_file($_FILES["hinhanh"]["tmp_name"], $target_file)){
        echo("Hinh anh da duoc up load");
      }
      else{
        echo("hinh anh khong duoc up load");
      }
      echo "<pre>";
      print_r($_FILES["hinhanh"]);
      echo "</pre>";

    //   $sql = "INSERT INTO tacgia (ten_tgia) VALUES ('$name');";
    //   $result = mysqli_query($conn,$sql);
    //   echo("Thanh cong");
    // }
    // $addArticleSql = "INSERT INTO `baiviet`(`tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia` 
    $addArticleSql = "INSERT INTO `baiviet`( `tieude`, `ten_bhat`, baiviet.ma_tloai, `tomtat`, `noidung`, baiviet.ma_tgia, `ngayviet`, `hinhanh`) VALUES ('$tieude','$tenbaihat',$theloai,'$tomtat','$noidung',$tacgia,'$ngayviet','$hinhanhpath')";
 
 //Thực thi câu lệnh
 
     if(mysqli_query($conn,$addArticleSql)){ //conn để kết nối csdl bên file ketnoi
         header("Location: article.php");
     };
}
 ?> 