<?php require '../includes/header_admin.php';
require('../includes/connect.php');

?>
<?php { ?>
    
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
        
            <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
            <form action="process_add_article.php" method="post" enctype="multipart/form-data">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text w-10">Tiêu đề</span>
                    <input type="text" class="form-control" name="txt_tieude">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tên bài hát</span>
                    <input type="text" class="form-control" name="txt_tenbaihat">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Thể loại</span>
                    <select class="form-select" aria-label="Default select example" name="option_Theloai">
                    <?php
                    $sql = "SELECT * FROM `theloai`";
                    //thuc hien caau truy van
                    $result = mysqli_query($conn,$sql);
                    //dem so luong du lieu database
                    $count = mysqli_num_rows($result);
                    
                    if($count>0){
                      
                      while($row = mysqli_fetch_assoc($result)){ ?>
                        
                        <option value=<?php echo($row['ma_tloai'])?> ><?php echo($row['ten_tloai'])?></option>
                       
                       <?php }}?>
                    </select>
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tóm tắt</span>
                    <textarea type="text" class="form-control" name="txt_tomtat"></textarea>

                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Nội dung</span>
                    <textarea type="text" class="form-control" name="txt_noidung"></textarea>

                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tác giả</span>
                    <select class="form-select" aria-label="Default select example" name = "option_tacgia">
                <?php
                    $sql = "SELECT * FROM `tacgia`";
                    //thuc hien caau truy van
                    $result = mysqli_query($conn,$sql);
                    //dem so luong du lieu database
                    $count = mysqli_num_rows($result);
                    
                    if($count>0){
                      
                      while($row = mysqli_fetch_assoc($result)){ ?>
                        
                        <option value=<?php echo($row['ma_tgia']); ?>><?php echo($row['ten_tgia']); ?></option>
                        <?php }}?>
                    </select>
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Ngày viết</span>
                    <input class="form-control" type="datetime-local" id="meeting-time" name="txt_ngayviet" value="2018-06-12T19:30"
                        min="2018-06-07T00:00" max="2025-06-14T00:00">
                   
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Hình ảnh</span>
                   
                   <input type="file" class="form-control" id="article_image" name="hinhanh" accept="image/png, image/jpeg" enctype="multipart/form-data" value="guitt">
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="author.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php } ?>
<?php include '../includes/footer_admin.php'; ?>