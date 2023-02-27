<?php
require('../includes/connect.php');
require("../includes/test_input.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_GET["id"];
    $txt_tieude = $_POST['txt_tieude'];
    $txt_tenbaihat = $_POST['txt_tenbaihat'];
    $option_Theloai = $_POST['option_Theloai'];
    $txt_tomtat = $_POST['txt_tomtat'];
    $txt_noidung = (!$_POST['txt_noidung'])?"":$_POST['txt_noidung'];
    $option_tacgia = $_POST['option_tacgia'];
    // $txt_ngayviet = $_POST['txt_ngayviet'];
    
    $img_url = ($_FILES['hinhanh']['full_path'])?$_FILES['hinhanh']['full_path']:"";
  
        $sql = "UPDATE `baiviet` SET `tieude`='$txt_tieude',`ten_bhat`='$txt_tenbaihat',`ma_tloai`='$option_Theloai',`tomtat`='$txt_tomtat',`noidung`='$txt_noidung',`ma_tgia`=$option_tacgia,`ngayviet`=CURRENT_TIMESTAMP(),`hinhanh`='$img_url' WHERE baiviet.ma_bviet =$id;";
        
       
        $result = mysqli_query($conn, $sql);
     
        header('Location: article.php');

      
    }

 ?>