<?php require '../includes/header_admin.php';
require('../includes/connect.php');


?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_article.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Tên bài hát</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Tóm tắt</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Ngày viết</th>
                        <th scope="col">Hình ảnh</th>



                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $sql = "SELECT *\n"

                    . "FROM baiviet\n"
                
                    . "    INNER JOIN tacgia ON tacgia.ma_tgia = baiviet.ma_tgia\n"
                
                    . "    INNER JOIN theloai ON theloai.ma_tloai  = baiviet.ma_tloai ORDER BY
                    ma_bviet ASC;";
                    //thuc hien caau truy van
                    $result = mysqli_query($conn,$sql);
                    //dem so luong du lieu database
                    $count = mysqli_num_rows($result);
                    
                    if($count>0){
                      
                      while($row = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td scope="row" ><?php echo($row['ma_bviet']); ?></td>
                            <td scope="row"><?php echo($row['tieude']); ?></td>
                            <td scope="row"><?php echo($row['ten_bhat']); ?></td>
                            <td scope="row"><?php echo($row['ten_tloai']); ?></td>
                            <td scope="row"><?php echo($row['tomtat']); ?></td>
                            <td scope="row"><?php echo($row['noidung']); ?></td>
                            <td scope="row"><?php echo($row['ten_tgia']); ?></td>
                            
                            <td><?php echo($row['ngayviet']); ?></td>
                            <td scope="row"><?php echo($row['hinhanh']); ?></td>
                            <td>
                                <a href="edit_article.php?id=<?php echo($row['ma_bviet'])?>&ma_tg=<?php echo($row['ma_tgia'])?>&ma_tl=<?php echo($row['ma_tloai'])?> "><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="process_delete_article.php?id=<?php echo($row['ma_bviet']).""?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                        
                      <?php }}?>
                    
                </tbody>
                
                
                

               
            </table>
        </div>
    </div>
</main>
<?php include '../includes/footer_admin.php'; ?>