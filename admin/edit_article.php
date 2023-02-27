<?php require '../includes/header_admin.php';
require('../includes/connect.php');
$idArticle = $_GET['id'];
$ma_tg = $_GET['ma_tg'];
$ma_tl = $_GET['ma_tl'];
$sql = "SELECT * FROM `baiviet` 
INNER JOIN tacgia ON tacgia.ma_tgia = baiviet.ma_tgia
INNER JOIN theloai ON theloai.ma_tloai  = baiviet.ma_tloai
where ma_bviet = $idArticle ";
                    //thuc hien caau truy van
                    $result = mysqli_query($conn,$sql);
                    //dem so luong du lieu database
                    $count = mysqli_num_rows($result);
                    $row = mysqli_fetch_assoc($result);
                   
                    $strNoidung = $row['noidung'];
                    $strTomtat = ($row['tomtat']);
                    $strTime = ($row['ngayviet']);
                    $img_url = $row['hinhanh'];
                    // echo($img_url);
?>
<?php { ?>
    
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
        
            <h3 class="text-center text-uppercase fw-bold">Sua bài viết</h3>
            <form action="process_edit_article.php?id=<?php echo($row['ma_bviet']) ?>" method="post" enctype="multipart/form-data">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text w-10">Tiêu đề</span>
                    <input type="text" class="form-control" name="txt_tieude" value ="<?php echo($row['tieude'])?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tên bài hát</span>
                    <input type="text" class="form-control" name="txt_tenbaihat" value =" <?php echo($row['ten_bhat'])?>">
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
                        
                        <option value="<?php echo($row['ma_tloai'])?>" ><?php echo($row['ten_tloai'])?></option>
                       
                       <?php }}?>
                    </select>
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tóm tắt</span>
                    <textarea type="text" class="form-control" name="txt_tomtat" value = " <?php echo($strTomtat)?>"><?php echo($strTomtat)?>
                    </textarea>

                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Nội dung</span>
                    <textarea type="text" class="form-control" name="txt_noidung" value= "<?php echo($strNoidung)?>"><?php echo($strNoidung)?></textarea>

                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Tác giả</span>
                    <select class="form-select" aria-label="Default select example" name = "option_tacgia">
                <?php
                    $sql = "SELECT * FROM `tacgia` where ma_tgia = $ma_tg";
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
                    <input
                        class="form-control" 
                        
                        id="meeting-time" 
                        name="txt_ngayviet" 
                        value="<?php echo($strTime);?>  "

                        min="2018-06-07T00:00" max="2025-06-14T00:00">
                   
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text">Hình ảnh</span>
                   
                   <input type="file" class="form-control" id="article_image" name="hinhanh" accept="image/png, image/jpeg" enctype="multipart/form-data" value="<?php echo $img_url?>">
                  
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="article.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php } ?>
<?php include '../includes/footer_admin.php'; ?>