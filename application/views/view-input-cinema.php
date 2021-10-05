<html>

<head>
    <title>Pemesanan Tiket Cinema 99</title>
</head>

<body>
    <center>
        <form action="<?= base_url('cinema/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        <h2>Pemesanan Tiket Cinema 99</h2>
                    </th>
                </tr>  
                <tr>
                    <td colspan="3"
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Nama Pemesan</td>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td>Judul Film</td>
                    <td>:</td>
                    <td>
                        <select name="judul" id="judul">
                            <option value="">~Pilih~</option>
                            <option value="Parasite">Parasite</option>
                            <option value="Hereditary">Hereditary</option>
                            <option value="The Closet">The Closet</option>
                            <option value="Kamen Raider Reiwa">Kamen Rider Reiwa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pukul</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="pukul" id="pukul" value="14.20">14.20
                        <input type="radio" name="pukul" id="pukul" value="15.40">15.40
                        <input type="radio" name="pukul" id="pukul" value="16.40">16.40
                    </td>
                </tr>
                <tr>
                    <td>Tipe Studio</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="studio" id="studio" value="Reguler 2D">Reguler 2D
                        <input type="radio" name="studio" id="studio" value="3D">3D
                        <input type="radio" name="studio" id="studio" value="Velvet">Velvet 
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Pesan</td>
                    <th>:</th>
                    <td>
                        <input type="text" name="pesan" id="pesan">
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="Center">
                        <input type="submit" value="Hitung"> 
                        <input type="reset" value="Batal"> 
                    </td>
                </tr>
            </table>
        </form> 
    </center>
</body>

</html>