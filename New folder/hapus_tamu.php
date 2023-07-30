<?php
$koneksi = mysqli_connect ("localhost","root", "","db_web2");

$id = $_GET['id'];

$hapus = "delete from buku_tamu where id = '$id'";

$hasil = mysqli_query($koneksi, $hapus);

if($hasil){
    header("location:tampil_tamu_tabel.php");
}else{
    echo "Data berhasil di hapus";
}
?>