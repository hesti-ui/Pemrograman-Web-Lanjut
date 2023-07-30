<!DOCTYPE html>
<html>
<head>
<title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata Diri</h2>
    <form method="post"  action="#">
        <label for="nama">Nama :</label>
        <input name="_nama"><br><br/>
        
        <label for="gender">Gender :</label>
        <input type="radio" value="Laki-Laki" name="_gender">Laki-Laki
        <input type="radio" value="Permpuan" name="_gender" >Perempuan<br><br/>

        <label for="hobby">Hobby :</label>
        <input type="checkbox" value="Korespondensi" name="_hobby[]">Korespondensi
        <input type="checkbox" value="Traveling" name="_hobby[]">Traveling
        <input type="checkbox" value="Shopping" name="_hobby[]">Shopping<br><br/>

        <label for="pendidikan">Pendidikan :</label>
        <select name="_pendidikan">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="SARJANA">SARJANA</option>
		</select><br><br/>

        <label for="alamat">Alamat:</label>
        <textarea name="_alamat"></textarea><br><br/>
        
        <input type="submit" value="Submit">

        <h2>Hasil Outputnya</h2>
        <h2>Biodata Anda</h2>
    </form>

    <?php   
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $nama = $_POST["_nama"];
        $gender = $_POST["_gender"];
        $hobby = $_POST["_hobby"];
        $pendidikan = $_POST["_pendidikan"];
        $alamat = $_POST["_alamat"];

        // Menampilkan biodata
        echo "<h2>Biodata:</h2>";
        echo "Nama: ".$nama."<br>";
        echo "Gender: ".$gender."<br>";
        echo "Hobby: ";
        foreach ($hobby as $hobby){
            echo $hobby."<br>";
        }
        echo "Pendidikan: ".$pendidikan."<br>";
        echo "Alamat: ".$alamat."<br>";
        }
    ?>
</body>
</html>