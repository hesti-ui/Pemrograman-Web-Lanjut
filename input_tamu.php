<?php

include ("koneksi.php");
$nama=$_GET['nama'];
$email=$_GET['email'];
$pesan=$_GET['pesan'];

$input= "insert into buku_tamu (nama,email,pesan)"."values ('$nama','$email','$pesan')";
$hasil= mysqli_query($koneksi, $input);

if ($hasil){
    header ("location:tampil_tamu_tabel.php");
}
else{
    echo 'data tidak berhasil';
}
?>