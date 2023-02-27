<?php require '../includes/header_admin.php'; 
require('../includes/connect.php');
    $ma = $_GET['id'];
    $sql = "SELECT * FROM `theloai` WHERE ma_tloai = $ma;" ;
    $result = mysqli_query($conn,$sql);
    //dem so luong du lieu database
    $count = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $a = $row['ten_tloai'];

?>

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin thể loại</h3>
                <form action="process_edit_category.php" method="post">
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                        <input type="text" class="form-control" name="txtCatId" readonly value=<?php echo($_GET['id']) ?>>
                    </div>

                    <!-- <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <input type="text" class="form-control" name="txtCatName" value = <?php print($a)  ?>>
                    </div> -->
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã thể loại</span>
                        <input type="text" class="form-control" name="txtCatName" value = "<?php print($a) ?>">
                    </div>
                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php include '../includes/footer_admin.php'; ?>