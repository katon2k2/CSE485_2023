<?php require 'includes/header.php'; ?>
<?php include 'includes/connect.php'; ?>

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
    </header>
    <main class="container-fluid mt-3">
        <h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>
        <div class="row">
        <?php   
            $sql = "SELECT * FROM baiviet";

            $result = mysqli_query($conn, $sql);   
            $row = mysqli_fetch_assoc($result);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <div class="col-sm-3" style=" display: flex; flex-wrap: wrap;">
                    <div class="card mb-2" style="width: 100%;">
                        <img src="<?php echo $row['hinhanh'];?>" class="card-img-top" alt="..." >
                        <div class="card-body" style = "background-image: linear-gradient(to bottom right, Fuchsia, Blue); ">
                            <h5 class="card-title text-center">
                                <a href="detail.php?id=<?php echo $row['ma_bviet'];?>" style="color : #FFFFFF; font-size:30px;" class="text-decoration-none">
                                <?php echo $row['ten_bhat'];?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>

            <?php }
            }
            ?>
        
        </div>
    </main>
<?php include 'includes/footer.php'; ?>