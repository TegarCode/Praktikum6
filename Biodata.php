<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="cekbiodata.php">
            <table width="400" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="130">Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td width="130">Umur</td>
                    <td><input type="text" name="umur"></td>
                </tr>
                <tr>
                    <td width="130">Agama</td>
                    <td><input type="text" name="agama"></td>
                </tr>
                <tr>
                    <td width="130">Jenis Kelamin</td>
                    <td><input type="radio" name="kelamin" value="laki-laki" require>Laki-laki
                        <input type="radio" name="kelamin" value="Perempuan" require>Perempuan
                </td>
                </tr>
                <tr>
                    <td width="130">Alamat</td>
                    <td><textarea name="alamat" id="alamat" cols="30" rows="10" require></textarea></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="btnLogin" value="Kirim">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>