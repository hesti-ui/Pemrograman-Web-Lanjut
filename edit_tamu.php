<h3> Edit Tamu</h3>
    <?php
    $koneksi = mysqli_connect ("localhost","root","","db_web2");

    $id = $_GET['id'];
    
    $edit = "select*from buku_tamu where id = '$id'";
    $hasil = mysqli_query($koneksi, $edit);
    $data = mysqli_fetch_array($hasil);

    echo "<form method=\"GET\"action=\"update_tamu.php\">
            <input type =\"hidden\"name=\"id\"value=\"$id\">

            Nama = <input type = \"text\"name=\"nama\"value=\$data[nama]\">
            Email = <input type = \"text\"name=\"email\"value=\$data[email]\">
            Pesan = <textarea name=\"pesan\"rows=\"3\"cols=\"30\">$data[pesan]</textarea>
            <input type = \"submit\"value=\"edit\">
            </form>";           
    ?>
</body>
</html>