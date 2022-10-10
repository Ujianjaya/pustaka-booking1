<html>
    <head>
        <title>Tampil Data Matakuliah</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th cosplan="3">Tampil Data Matakuliah</th>
                </tr>
                <tr>
                    <td cosplan="3"><hr></td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td><?=$kode;?></td>
                </tr>
                <tr>
                    <td>Nama MTK</td>
                    <td>:</td>
                    <td><?=$nama;?></td>
                </tr>
                <tr>
                    <td>SKS</td>
                    <td>:</td>
                    <td><?=$sks;?></td>
                </tr>
                <tr>
                    <td cosplan="3" align="center"> <a href="<?=base_url('index.php/matakuliah');?>">Kembali</a></td>
                </tr>
            </table>
        </center>
    </body>
</html>