<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "hotel";
$conn = new mysqli($hostname, $username, $password, $database);

$nama = $_POST['nama-pemesan'];
$nomor = $_POST['nomor-identitas'];
$jenisKelamin = $_POST['jenis-kelamin'];
$tipeKamar = $_POST['tipe-kamar'];
$tggl = $_POST['tgl-pesan'];
$durasi = $_POST['durasi'];

$layanan = isset($_POST['layanan']) ? "Y" : "N";

$hargaKamar = $_POST["harga-kamar"];
$diskon = $_POST["diskon"]; //
$potonganDiskon = $_POST["potongan-diskon"]; //
$jmlKamar = $_POST["jml-kamar"]; //
$jmlLayanan = $_POST["jml-layanan"]; //

$hargaLayanan = $_POST["harga-layanan"];
$totalPembayaran = $_POST["total-pembayaran"];

$query = "INSERT INTO pemesanan_kamar (nama,nomor_identitas,jenis_kelamin,tipe_kamar,tanggal_pemesanan,durasi,pelayanan_kamar,total_pembayaran)
            values ('$nama','$nomor','$jenisKelamin','$tipeKamar','$tggl','$durasi','$layanan','$totalPembayaran')";

$sukses = mysqli_query($conn, $query);
// if($sukses){ 
//     echo"data berhasil disimpan";
// }else{
//     echo "data gagal disimpan";
// }
?>


<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<div class="position-relative">
    <img src="assets/image/banner-1.jpg" class="img-fluid" alt="Banner">
</div>

<div class="container mt-3">
    <!-- Body -->
    <div class="row mt-3">
        <div class="col-12 col-md-9">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Selamat</strong> Pesanan Anda Berhasil Di Buat.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <!-- TABEL -->
            <div class="card">
                <div class="card-header text-center">
                    BUKTI PEMESANAN KAMAR HOTEL
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td>Nama</td>
                            <td>: <?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Identitas</td>
                            <td>: <?php echo $nomor; ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: <?php
                                    if ($jenisKelamin == 'L') {
                                        echo 'Laki-Laki';
                                    }
                                    if ($jenisKelamin == 'P') {
                                        echo 'Perempuan';
                                    } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemesanan</td>
                            <td>: <?php echo date('d F Y', strtotime($tggl)); ?></td>
                        </tr>
                        <tr>
                            <td>Tipe Kamar</td>
                            <td>:
                                <?php
                                if ($tipeKamar == '1') {
                                    echo 'Kamar Standar';
                                } ?>
                                <?php
                                if ($tipeKamar == '2') {
                                    echo 'Kamar Deluxe';
                                } ?>
                                <?php
                                if ($tipeKamar == '3') {
                                    echo 'Kamar Executive';
                                } ?>
                            </td>
                        </tr>
                        </tr>
                        <tr>
                            <td>Lama Menginap</td>
                            <td>: <?php echo $durasi; ?> Hari</td>
                        </tr>
                        </tr>
                        <tr>
                            <td>Harga Kamar</td>
                            <td>: Rp. <?php echo number_format($hargaKamar, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Diskon</td>
                            <td>: <?php echo $diskon; ?> %</td>
                        </tr>
                        <tr>
                            <td>Potongan Diskon</td>
                            <td>: Rp. <?php echo number_format($potonganDiskon, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Diskon</td>
                            <td>: Rp. <?php echo number_format($jmlKamar, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Layanan Hotel</td>
                            <td>: <?php
                                    if ($layanan == 'Y') {
                                        echo 'Makan Pagi';
                                    } ?>
                            </td>
                        <tr>
                            <td>Harga Layanan</td>
                            <td>: Rp. <?php echo number_format($hargaLayanan, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Jumlah Layanan</td>
                            <td>: Rp. <?php echo number_format($hargaLayanan, 0, ',', '.'); ?></td>
                        </tr>
                        <tr>
                            <td>Total Pembayaran</td>
                            <td>: Rp. <?php echo number_format($totalPembayaran, 0, ',', '.'); ?></td>
                        </tr>
                    </table>
                </div>

            </div>
            <!-- ****** -->

            <!-- PILIHAN -->
            <div class="card text-center">
                <span>Pesan Lagi?</span>
                <row>
                    <a href="pemesanan.php" class="btn btn-primary">Ya</a>
                    <a href="index.php" class="btn btn-danger">Tidak</a>
                </row>
            </div>
        </div>

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

<?php include 'layout/footer.php' ?>