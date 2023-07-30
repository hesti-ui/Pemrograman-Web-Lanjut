<html>
<body>
<title>PERTEMUAN 1</title>
</body>
<?php
    echo "<b>Latihan 1</b><br>";
    echo "teks ini muncul dari dalam kode PHP";
    //ini contoh baris komentar
    /* ini contoh beberapa
    baris komentar*/
    echo "<hr>";
?>

<?php
    echo "<b>Latihan 2</b><br>";
    $judul="pemrograman PHP";
    echo "teks ini adalah isi variable judul=";
    echo $judul;
    echo "<hr>";
?>

<?php
    echo "<b>Latihan 3</b><br>";
    $harga="seribu";
    echo "tekst ini adalah variable harga=";
    echo $harga;
    echo "<hr>";
?>


<?php
    echo "<b>Latihan 4</b><br>";
    Define("JUDUL", "PEMROGRAMAN PHP");
    echo "teks ini adalah konstanta JUDUL=";
    echo JUDUL;
    echo "<br>";
    define("HARGA",1000);
    echo "teksini adalah isi konstanta HARGA+100=";
    echo HARGA+100;
    echo "<hr>";
?>
</body>
</html>