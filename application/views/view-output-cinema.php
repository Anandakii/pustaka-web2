<html>

<head>
    <title>Pemesanan Tiket Cinema 99</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3">
                    <h3>Pemesanan Tiket</h3>
                    <h3>Cinema 99</h3>
                </th>
            </tr> 
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <tr>
                <td>Judul Film</td>
                <td>:</td>
                <td>
                    <?= $judul; ?>
                </td>
            </tr>
            <tr>
                <td>Pukul</td>
                <td>:</td>
                <td>
                    <?= $pukul; ?>
                </td>
            </tr>
            <tr>
                <td>Tipe Studio</td>
                <td>:</td>
                <td>
                    <?= $studio; ?>
                </td>
            </tr>
            <?php
            if ($studio == "Reguler 2D") {
                $harga = 40000;
            } else if ($studio == "3D") {
                $harga = 80000;
            } else if ($studio == "Velvet") {
                $harga = 100000;
            }
            $total = $harga * $pesan ?>
            <tr>
                <td>Jumlah Pesan</td>
                <td>:</td>
                <td>
                    <?= $pesan; ?>
                </td>
            </tr>
            <tr>
                <td>Harga Tiket</td>
                <td>:</td>
                <td>
                    <?= $harga; ?>
                </td>
            </tr>
            <tr>
                <td>Total</td>
                <td>:</td>
                <td>
                    <?= $total; ?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('cinema');
?>">Input Data Lagi</a>
                </td>
            </tr> 
        </table>
    </center>
</body>

</html>