<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "hotel";
$conn = new mysqli($hostname, $username, $password, $database);

$query = "SELECT * FROM pemesanan_kamar";
$result = $conn->query($query);
?>


<div class="position-relative">
    <img src="assets/image/banner-1.jpg" class="img-fluid" alt="Banner">
    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1 class="text-uppercase fw-bold mb-4"></i>RIWAYAT PEMESANAN</h1>
    </div>

</div>

<div class="container mt-5">
    <!-- Body -->
    <div class="text-center">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Identitas</th>
                    <th>Jenis Kelamin</th>
                    <th>Tipe Kamar</th>
                    <th>Tanggal Pemesanan</th>
                    <th>Jumlah Hari</th>
                    <th>Layanan Kamar</th>
                    <th>Total Pembayaran</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
               
               <?php
                $count = 0;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $count++;
                        echo "<tr>";
                        echo "<td>$count</td>";
                        echo "<td>". $row['nama'] ."</td>";
                        echo "<td>". $row['nomor_identitas'] ."</td>";
                        echo "<td>". $row['jenis_kelamin'] ."</td>";
                        echo "<td>". $row['tipe_kamar'] ."</td>";
                        echo "<td>". date('d F Y', strtotime($row['tanggal_pemesanan'])) ."</td>";
                        echo "<td>". $row['durasi'] ." Hari</td>";
                        echo "<td>". $row['pelayanan_kamar'] ."</td>";
                        echo "<td>". $row['total_pembayaran'] ."</td>";
                    }
                }   
                ?>

            </tbody>
        </table>
    </div>
</div>

<?php include 'layout/footer.php' ?>