<?php
//ket noi DataBase
  $servename = "localhost";
  $username = "root";
  $password ="";
  $dbname= "btth01_cse485";
  $conn=mysqli_connect($servename,$username,$password,$dbname);
  if($conn){
    echo"Ket noi thaanh congg <br/>";
  }
  else{
    echo ("Ket noi that bai");
  }
  //Cau truy van
  $sql = "SELECT * FROM `baiviet`";
  //thuc hien caau truy van
  $result = mysqli_query($conn,$sql);
  //dem so luong du lieu database
  $count = mysqli_num_rows($result);
  $row =1;
  if($count>0){
    
    while($row = mysqli_fetch_assoc($result)){
    //   echo var_dump($row)."<br/>";
    //   echo($row['ma_bviet']);
    }
  }
?>