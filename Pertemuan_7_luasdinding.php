<!DOCTYPE html>
<html>

<head>
    <title>Quis - Pertemuan 7</title>
</head>

<body>

    <?php
    $luas_dinding       = 3 * 4;
    $luas_pintu         = 1 * 2;
    $luas_jendela       = 1 * 1;
    $luas_dinding_dicat = ($luas_dinding * 4) - $luas_pintu - $luas_jendela;
    $harga_permeter_cat = 25000;

    $total_harga_pengecatan = $luas_dinding_dicat * $harga_permeter_cat;

    ?>
    <h2>PERHITUNGAN BIAYA CAT </h2>

    <table border="1" style="text-align: left;">
        <tr>
            <th>LUAS DINDING</th>
            <td><?php echo $luas_dinding_dicat; ?> M</td>
        </tr>
        <tr>
            <th>BIAYA PERMETER</th>
            <td>Rp. <?php echo number_format($harga_permeter_cat, 0, '.', ',')?></td>
        </tr>
        <tr>
            <th>TOTAL BIAYA PENGECATAN</th>
            <td>Rp. <?php echo number_format($total_harga_pengecatan, 0, '.', ',')?></td>
        </tr>
    </table>
</body>

</html>