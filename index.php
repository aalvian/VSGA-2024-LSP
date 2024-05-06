<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<div class="position-relative">
    <img src="assets/image/banner3.jpg" class="img-fluid" alt="Banner">

    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1>Hotel Jinggo</h1>
        <p>Kenyamanan Untuk Berstirahat</p>
    </div>
</div>

<div class="container mt-5">

    <div class="row mt-3">
        <div class="card-body text-center">
            <div class="col-9">
                <h5 class="card-title">Pilih Kamarmu</h5>
                <p>Kalau Capek Hidup Itu Istirahat</p>
            </div>
        </div>

        <div class="col-12 col-md-9">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                <!-- Card 1 -->
                <div class="col">
                    <div class="card">
                        <img src="assets/image/card-1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">STANDAR</h5>
                            <p class="card-text">Kamar hotel standar kami menawarkan kenyamanan dengan tempat tidur yang nyaman, pemandangan yang indah, dan kamar mandi bersih. Dilengkapi dengan fasilitas modern seperti TV, AC, dan WiFi gratis.</p>
                            <a href="pemesanan.php" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                    <div class="card">
                        <img src="assets/image/card-2.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">DELUXE</h5>
                            <p class="card-text">Pada kamar deluxe, tempat di mana kenyamanan bertemu kemewahan. Dilengkapi dengan tempat tidur mewah, ruang duduk yang luas, dan fasilitas berkualitas tinggi. Cocok untuk pengalaman menginap yang istimewa.</p>
                            <a href="pemesanan.php" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card">
                        <img src="assets/image/card-3.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">EXECUTIVE</h5>
                            <p class="card-text">Kamar executive yang mewah dan elite. Kamar ini dilengkapi dengan fasilitas eksklusif, ruang kerja yang luas, dan pemandangan yang menakjubkan. Ideal untuk para pelancong bisnis yang menghargai kenyamanan dan produktivitas.</p>
                            <a href="pemesanan.php" class="btn btn-primary">Pesan</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- KOLOM PAKET YOUTUBE -->
        <div class="col-12 col-md-3">
            <!-- Paket Wisata 1 -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Kamar Standar</h5>
                    <div class="text-center ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/5w2dyUcIj4o?si=16M24Ytmfh1Vbszl" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <!-- Paket Wisata 2 -->
            <div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title">Kamar Executive</h5>
                    <div class="text-center ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/tsgctLYxnWI?si=L9UU3S3syOYtUexf" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


<?php include 'layout/footer.php' ?>