<!DOCTYPE html>
<html>

<head>
    <title>Quis - Pertemuan 7</title>
</head>

<body>
    <h3 class="text-center">DERET BILANGAN</h3>
    <form method="POST" action="">
        <div class="form-group">
            <label for="first_name">Batas</label>
            <input type="number" name="batas" class="form-control" placeholder="Enter Batas">
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>

    <br>
    <?php 
                if(isset($_POST['batas'])) {
                    $batas = $_POST['batas'];
                    
                ?>
    <h2>HASIL DERET BILANGAN PRIMA</h2>

    <table border="1" style="text-align: left;">
        <tr>
            <th>BATAS</th>
            <td><?php echo $batas; ?></td>
        </tr>
        <tr>
            <th>DERET BILANGAN</th>
            <td><?php

                for ($i = 2; $i <= $batas; $i++) {
                    $ifPrima = true;

                    for ($j = 2; $j < $i; $j++) {
                        if ($i % $j === 0) {
                            $ifPrima = false;
                            break;
                        }
                    }

                    if ($ifPrima) {
                        echo $i . " ";
                    }
                }
                    ?></td>
        </tr>
    </table>

    <?php

                }
            ?>
</body>

</html>