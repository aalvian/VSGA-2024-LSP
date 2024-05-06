<?php include 'layout/header.php' ?>

<?php include 'layout/navbar.php' ?>


<div class="position-relative">
    <!-- Gambar Banner -->
    <img src="assets/image/banner-1.jpg" class="img-fluid" alt="Banner">

    <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
        <h1 class="text-uppercase fw-bold mb-4"></i>FORM PEMESANAN KAMAR</h1>
    </div>
</div>

<div class="container mt-3">

    <!-- Body -->
    <div class="row mt-5">
        <div class="col-12">
            <form action="simpan.php" method="POST" autocomplete="off">

            <!-- FORM DATA DIRI -->
                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label for="nama-pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control form-Control-sm" id="nama-pemesan" name="nama-pemesan" placeholder="Masukkan Nama" required>
                    </div>

                    <div class="mb-3 col-12 col-md-6">
                        <label for="nomor-identitas" class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control form-Control-sm" id="nomor-identitas" name="nomor-identitas" placeholder="Masukkan Nomor Identitas" minlength="16" maxlength="16">
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3 col-12 col-md-6">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis-kelamin" id="jenis-kelamin" value="L" required>
                            <label class="form-check-label" for="laki-laki">Laki-laki</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis-kelamin" id="jenis-kelamin" value="P">
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-6">
                        <label for="tgl-pesan" class="form-label">Tanggal Pesan</label>
                        <input type="date" class="form-control form-Control-sm" id="tgl-pesan" name="tgl-pesan" required>
                    </div>
                </div>
                <!-- ****** -->

                <!-- FORM KAMAR -->
                <div class="row">
                    <div class="mb-3 col-12 col-md-4">
                        <label for="tipe-kamar" class="form-label">Tipe Kamar</label>
                        <select class="form-select" aria-label="Default select example" id="tipe-kamar" name="tipe-kamar" onchange="updateHargaKamar()">
                            <option selected>- PILIH -</option>
                            <option value="1">Kamar Standar</option>
                            <option value="2">Kamar Deluxe</option>
                            <option value="3">Kamar executive</option>
                        </select>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="durasi" class="form-label">Durasi</label>
                        <div class="input-group">
                            <input type="number" class="form-control form-Control-sm" id="durasi" name="durasi" aria-describedby="bassic-addon2" min="1" onchange="updateDiskon(this)" required>
                            <span class="input-group-text" id="bassic-addon2">hari</span>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="diskon" class="form-label">Diskon</label>
                        <div class="input-group">
                            <input type="number" class="form-control form-Control-sm" id="diskon" name="diskon" aria-describedby="bassic-addon2" required readonly>
                            <span class="input-group-text" id="bassic-addon2">%</span>
                        </div>
                    </div>
                </div>

                <!-- FORM HITUNG KAMAR -->
                <div class="row">
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-kamar" class="form-label">Harga Kamar</label>
                        <div class="input-group">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="text" class="form-control form-Control-sm" id="harga-kamar" name="harga-kamar" aria-describedby="bassic-addon2" readonly>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="potongan-diskon" class="form-label">Potongan Diskon</label>
                        <div class="input-group">
                            <input type="number" class="form-control form-Control-sm" id="potongan-diskon" name="potongan-diskon" aria-describedby="bassic-addon2" required readonly>
                            <span class="input-group-text" id="bassic-addon2">%</span>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="jml-kamar" class="form-label">Jumlah</label>
                        <div class="input-group">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="number" class="form-control form-Control-sm" id="jml-kamar" name="jml-kamar" aria-describedby="bassic-addon2" required readonly>
                        </div>
                    </div>
                </div>

                <!-- FORM LAYANAN -->
                <div class="row">
                    <div class="mb-3 col-12 col-md-4">
                        <label for="layanan" class="form-label">Pelayanan kamar</label>
                        <div class="d-lg-flex justify-content-between">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="Y" id="layanan" name="layanan" onclick="handleLayanan(this)">
                                <label class="form-check-label" for="layanan">Makan Pagi (Rp. 80.000)</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="harga-layanan" class="form-label">Harga Layanan</label>
                        <div class="input-group">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="text" class="form-control form-Control-sm" id="harga-layanan" name="harga-layanan" aria-describedby="bassic-addon2" readonly>
                        </div>
                    </div>
                    <div class="mb-3 col-12 col-md-4">
                        <label for="jml-layanan" class="form-label">Jumlah</label>
                        <div class="input-group">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="text" class="form-control form-Control-sm" id="jml-layanan" name="jml-layanan" aria-describedby="bassic-addon2" readonly>
                        </div>
                    </div>
                </div>

                <!-- FORM TOTAL -->
                <div class="row">
                    <div class="mb-3 col-12 col-md-4 offset-md-8">
                        <label for="total-pembayaran" class="form-label">Total Pembayaran</label>
                        <div class="input-group">
                            <span class="input-group-text" id="bassic-addon2">Rp</span>
                            <input type="text" class="form-control form-Control-sm" id="total-pembayaran" name="total-pembayaran" aria-describedby="bassic-addon2" readonly>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-sm btn-primary" value="simpan">
                <button type="button" class="btn btn-sm btn-success" onclick="hitung()">Hitung</button>
                <button type="reset" class="btn btn-sm btn-danger" value="reset">Reset</button>
            </form>
        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
    makanPagi = false; // ketika di centang true

    // MENGISI VALUE OTOMATIS KE FORM HARGA KAMAR
    function updateHargaKamar() {
        nilai = Number(document.getElementById("tipe-kamar").value);
        kamar = document.getElementById("harga-kamar");
        hargaKamar = 0;

        if (nilai == 1) {
            hargaKamar = 300000;
        } else if (nilai == 2) {
            hargaKamar = 500000;
        } else if (nilai == 3) {
            hargaKamar = 800000;
        }

        kamar.value = hargaKamar;
    }

    // ***** MENGISI FORM HARGA LAYANAN (MAKAN PAGI) ***** //
    function handleLayanan(cb) {
        makanPagi = cb.checked;
        hl = document.getElementById("harga-layanan");
        if (makanPagi) {
            hl.value = 80000;
        } else {
            hl.value = 0;
        }
    }

    function updateDiskon() {
        dis = Number(document.getElementById("durasi").value);
        elementDiskon = document.getElementById("diskon");
        persen = 0;

        if (dis > 3) {
            persen = 10;
        }

        elementDiskon.value = persen;
    }

    function hitungLayanan() {
        totalLayanan = 0;

        if (makanPagi) {
            totalLayanan = totalLayanan + 80000;
        }

        return totalLayanan;
    }

    function hitung() {
        // Agar bisa mengambil potongan diskon
        updateDiskon();

        var hargaKamar = document.getElementById("harga-kamar").value; // ID "harga-kamar"
        var hargaLayanan = document.getElementById("harga-layanan").value;
        var hari = document.getElementById("durasi").value;

        hargaKamar = parseInt(hargaKamar) || 0;
        diskon = parseInt(diskon) || 0;
        hargaLayanan = parseInt(hargaLayanan) || 0;
        hari = parseInt(hari) || 0;

        // LOGIKA DISKON 
        var jumlah = hargaKamar * hari;
        if (hari > 3) {
            var diskon = jumlah * 0.1;
            jumlah -= diskon;
        }
        // LOGIKA JUMLAH LAYANAN
        var jumlahMakan = hargaLayanan * hari;

        //LOGIKA TOTAL PEMBAYARAN
        var jumlahTagihan = jumlah + (hargaLayanan * hari);

        document.getElementById("potongan-diskon").value = diskon;
        document.getElementById("jml-kamar").value = jumlah;
        document.getElementById("jml-layanan").value = jumlahMakan;
        document.getElementById("total-pembayaran").value = jumlahTagihan;
    }
</script>

<?php include 'layout/footer.php' ?>