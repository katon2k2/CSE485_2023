<?php require '../includes/header_admin.php'; ?>
<?php include '../includes/connect.php'; ?>

    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Người dùng</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php 
                                $query = "SELECT COUNT(user.ma_ngdung) AS count_user FROM user";
                                $result = mysqli_query($conn,$query);
                                $numberOfUser = 0;
                                if(mysqli_num_rows($result)>0){
                                    $numberOfUser = mysqli_fetch_assoc($result)['count_user'];
                                }
                                echo $numberOfUser;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Thể loại</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php 
                                $query = "SELECT COUNT(theloai.ma_tloai) AS count_theloai FROM theloai";
                                $result = mysqli_query($conn,$query);
                                $numberOfCategory = 0;
                                if(mysqli_num_rows($result)>0){
                                    $numberOfCategory = mysqli_fetch_assoc($result)['count_theloai'];
                                }
                                echo $numberOfCategory;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Tác giả</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php 
                                $query = "SELECT COUNT(tacgia.ma_tgia) AS count_tacgia FROM tacgia";
                                $result = mysqli_query($conn,$query);
                                $numberOfAuthor = 0;
                                if(mysqli_num_rows($result)>0){
                                    $numberOfAuthor = mysqli_fetch_assoc($result)['count_tacgia'];
                                }
                                echo $numberOfAuthor;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Bài viết</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php 
                                $query = "SELECT COUNT(baiviet.ma_bviet) AS count_baiviet FROM baiviet";
                                $result = mysqli_query($conn,$query);
                                $numberOfPost = 0;
                                if(mysqli_num_rows($result)>0){
                                    $numberOfPost = mysqli_fetch_assoc($result)['count_baiviet'];
                                }
                                echo $numberOfPost;
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php include '../includes/footer_admin.php'; ?>  