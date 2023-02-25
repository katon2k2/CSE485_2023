<?php require 'includes/header.php'; ?>
<?php include 'includes/connect.php'; ?>

    <?php
        $post_id = $_GET['id'];
        $sql = "SELECT baiviet.ma_bviet, baiviet.ten_bhat, theloai.ten_tloai, baiviet.tomtat, baiviet.noidung, tacgia.ten_tgia, baiviet.hinhanh
        FROM baiviet
        INNER JOIN tacgia on tacgia.ma_tgia = baiviet.ma_tgia 
        INNER JOIN theloai on theloai.ma_tloai = baiviet.ma_tloai
        WHERE baiviet.ma_bviet = {$post_id}";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0)
            $data = mysqli_fetch_assoc($result);
    ?>

    </header>
    <main class="container mt-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row mb-5">
            <div class="col-sm-4">
            <img src="<?php echo $data['hinhanh'];?>" class="img-fluid" alt="...">
            </div>
            <div class="col-sm-8">
                <h5 class="card-title mb-2">
                    <a href="" class="text-decoration-none"><?php echo $data['ten_bhat'];?></a>
                </h5>
                <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $data['ten_bhat'];?></p>
                <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $data['ten_tloai'];?></p>
                <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $data['tomtat'];?></p>
                <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $data['tomtat'];?></p>
                <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $data['ten_tgia'];?></p>
            
            </div>          
        </div>
    </main>
<?php include 'includes/footer.php'; ?>