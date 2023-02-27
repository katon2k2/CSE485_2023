<?php require '../includes/header_admin.php';
require('../includes/connect.php');


?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_category.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT * FROM `theloai`";
                    //thuc hien caau truy van
                    $result = mysqli_query($conn,$sql);
                    //dem so luong du lieu database
                    $count = mysqli_num_rows($result);
                    
                    if($count>0){
                      
                      while($row = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <th scope="row"><?php echo($row['ma_tloai']); ?></th>
                            <td><?php echo($row['ten_tloai']); ?></td>
                            <td>
                                <a href="edit_category.php?id=<?php echo($row['ma_tloai']).""?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a  href="process_delete_category.php?id=<?php echo($row['ma_tloai']).""?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        
                      <?php }}?>
                    
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include '../includes/footer_admin.php'; ?>