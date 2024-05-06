<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<div class="position-relative">
    <img src="assets/image/banner-1.jpg" class="img-fluid" alt="Banner">

    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1 class="text-uppercase fw-bold mb-4"></i>HARGA KAMAR</h1>
    </div>
</div>

<div class="container mt-5">
    <!-- Body -->
    <div class="text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Kamar</th>
                    <th>Harga Kamar</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                <tr>
                    <td>1</td>
                    <td>Kamar Standar</td>
                    <td>Rp. 300.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Kamar Deluxe</td>
                    <td>Rp. 500.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Kamar Executive</td>
                    <td>Rp. 800.000</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'layout/footer.php' ?>