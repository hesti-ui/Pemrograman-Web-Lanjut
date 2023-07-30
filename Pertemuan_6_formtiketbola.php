<html>
<head>
<title>Formulir Tiket Bola</title>
</head>
<body>
    <form method="post" action="#">
    <h3>FORM TIKET BOLA SEAGAMES 2018<br>
        INDONESIA VS MALAYSIA<br>
        PUKUL 15:00 WIB</h3>

    <label for="nama">Nama Pemesan :</label>
    <input type="text" name="_nama"><br><br>

    <label for="telp">Telepon :</label>
    <input type="text" name="_tlp"><br><br>

    <label for="jenistiket">Jenis Tiket :</label>
    <select name="_jnstkt">
        <option value="VIP">VIP</option>
        <option value="kelas 1">Kelas 1</option>
        <option value="kelas 2">Kelas 2</option>
        <option value="kelas 3">Kelas 3</option>
	</select><br><br/>

    <label for="jumlahtiket">Jumlah Tiket :</label>
    <input type="number" name="_jml"> Lembar<br>

    <input type="submit" value="Simpan" name="_simpan"><br>

    <h3>DATA PEMESANAN TIKET BOLA SEAGAMES 2018<br>
        INDONESIA VS MALAYSIA<br>
        PUKUL 15:00 WIB</h3>
    </form>

    <?php   
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $nama = $_POST["_nama"];
            $telp = $_POST["_tlp"];
            $jenistiket = $_POST["_jnstkt"];
            $jumlahtiket = $_POST["_jml"];
            $hargatiket;

            if ($jenistiket == "VIP"){
                $hargatiket = 500000;
            }elseif ($jenistiket == "kelas 1"){
                $hargatiket = 400000;
            }elseif ($jenistiket == "kelas 2"){
                $hargatiket = 300000;
            }elseif ($jenistiket == "kelas 3"){
                $hargatiket = 2000000;
            }else{
                $hargatiket = 0;
            }

            echo "Nama Pemesan : ".$nama."<br>";
            echo "TELP : ".$telp."<br>";
            echo "Jenis Tiket : ".$jenistiket."<br>";
            echo "Harga Tiket : ".$hargatiket."<br>";
            echo "Banyaknya Tiket : ".$jumlahtiket."<br>";
            echo "Total Bayar : ".$hargatiket*$jumlahtiket."<br>";
        }
    ?>
</body>
</html>
