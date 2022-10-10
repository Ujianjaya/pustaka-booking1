<html>
    <head>
        <title>Form Input Matakuliah</title>
    </head>
    <body>
        <center>
        <form method="post" action="<?php echo base_url(); ?>index.php/Matakuliah/cetak">
        <table>
            <tr>
                <th colspan="3">Form input Mata Kuliah</th>
            </tr>
            <tr>
                <td colspan="3"><hr></td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>;</th>
                <td> <input type="text" name="kode" id="kode"></td>
            </tr>
            <tr>
                <th>Nama MTK</th>
                <th>;</th>
                <td> <input type="text" name="nama" id="nama"></td>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <select name="sks" id="sks">
                        <option value="">Pilih SKS</option>
                        <option value="2">2</Option> 
                        <Option Value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
                <td colspan="3"align="center"> <input type="submit" value ="submit"> </td>
            </tr>
        </table>
    </form>
    </body>
</html>

