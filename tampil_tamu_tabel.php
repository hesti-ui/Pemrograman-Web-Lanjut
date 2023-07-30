<h2> Data Tamu </h2>
    <?php
    include ("koneksi.php");
    $tampil = "select * from buku_tamu order by id";
    $hasil = mysqli_query($koneksi, $tampil);
    $total = mysqli_num_rows($hasil);
    echo "<table border = 1> <tr>
    <th bgcolour = 'blue'> Nama </th>
    <th bgcolour = 'blue'> Email </th>
    <th bgcolour = 'blue'> Pesan </th>
    <th bgcolour = 'blue'> Action </th>";
    while ($data = mysqli_fetch_array ($hasil)){
        echo "<tr>
        <td>$data[nama]</td>
            <td> $data[email]</td>
                <td> $data[pesan]</td>
                    <td> <a href = \"edit_tamu.php?id=$data[id]\">Edit</a>
                    <a href = \"hapus_tamu.php?id=$data[id]\">Hapus</a></td>        
        </tr>";
    }
    echo "<table>";
    ?>
</body>
</html>