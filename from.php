<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="tampil.php" method="post"></form>
<table border="0"  cellspacing="10" width="800" align="center">
    <tbody>
    <tr>
        <th><h1>Form Regritasi</h1></th>
    </tr>
    <tr>
        <td>Isi Data Dibawah ini :</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="Masukan Nama" size="30" maxlength="30" autocomplete="30"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td><textarea name="alamat"  cols="50" rows="4"></textarea></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td><input type="text" name="tempat_lahir" placeholder="Masukan Tempat Lahir" size="30" maxlength="30" autocomplete="30"></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td><input type="text" name="tanggal_lahir" placeholder="Masukan Tanggal Lahir" size="30" maxlength="30" autocomplete="30"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td><input type="radio" name="jenis_kelamin" <?php if(isset($gender) && $gender=="laki-laki")echo $gender ?>
        value="laki-laki" checked>Laki-Laki
        <input type="radio" name="jenis_kelamin" <?php if(isset($gender) && $gender=="perempuan")echo $gender ?>
        value="perempuan">Perempuan</td>
    </tr>
    <tr>
        <td>Pendidikan</td>
        <td>
            <select name="pendidikan">
            <option value="">Pilih Pendidikan</option>
            <option value="D3">D3</option>
            <option value="S1">S1</option>
            <option value="S2">S2</option>
        </td>
    </tr>
    <tr>
    <td><input type="submit" name="sumbit" value="Submit">
    <input type="reset" name="reset" value="Cancel"></td>
    </tr>
    </tbody>
</table>

</body>
</html>