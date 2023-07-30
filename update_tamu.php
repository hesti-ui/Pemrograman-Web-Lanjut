<?php
    $koneksi = mysqli_connect ("localhost","root","","db_web2");
    $id = $_GET['id'];
    $nama = $_GET['nama'];

    $email = $_GET['email'];
    $pesan = $_GET['pesan'];
    $update = "update buku_tamu set nama='$nama',email='$email',pesan='$pesan' where id ='$id'";

    $hasil=mysqli_query($koneksi, $update);

    if ($hasil){
        header("location:tampil_tamu_tabel.php");
    }
    else{
        echo "update data gagal";
    }
?>