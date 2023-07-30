<html>
<body>
<title>PERTEMUAN 8</title>
</body>
<?php
function cetakSlipGaji($nama, $gaji, $terlambat){
    $dendaPerHari = 150000;
    $denda_keterlambatan = $dendaPerHari * $terlambat;

    echo "Besaran honor yang didapat oleh $nama : <br>";
    echo "Gaji = $gaji <br>";
    echo "Potongan Keterlambatan = $denda_keterlambatan <br>";
    echo "Total Diterima = ".$gaji - $denda_keterlambatan;
}
cetakSlipGaji ("Gus Samsudin", 45000000, 10)
?>
</body>
</html>