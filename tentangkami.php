<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<?php
include("lib/file_util.php");
?>

<div class="position-relative">
    <img src="assets/image/banner-1.jpg" class="img-fluid" alt="Banner">
    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1 class="text-uppercase fw-bold mb-4"></i>TENTANG JINGGO</h1>
    </div>
</div>

<div class="container mt-5">
    <div class="row mt-3">
        <div class="col-12 col-md-8">
            <div class="col">
                <div class="card">
                    <iframe width=100% height="500" src="https://www.youtube.com/embed/gGc2W6E3UVc?si=t-75pv5qVLDzSW0Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title text-uppercase fw-bold"><i class="fas fa-home me-2"></i>Alamat Kami</h6>
                    Jl. Merdeka No. 2, Banyuwangi, Jawa Timur, Indonesia (68421)
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h6 class="card-title text-uppercase fw-bold"><i class="fas fa-phone me-2"></i>No Telepon</h6>
                    +62 852 3182 3145
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h6 class="card-title text-uppercase fw-bold"><i class="fas fa-envelope me-2"></i>Email</h6>
                    jinggo@booking.com
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container text-center mt-5">
    <hr class="mx-auto">
    <p style="text-align: justify">
        <?php
        $fileObject = new FileUtil("sejarah.txt");
        $str_data = $fileObject->readTxtFile();
        echo $str_data;
        ?>
    </p>
</div>

<?php include 'layout/footer.php' ?>