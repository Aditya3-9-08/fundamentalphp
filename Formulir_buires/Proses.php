<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA SISWA</title>
</head>
<body>  

<?php
if (isset($_POST['KIRIMKAN BIODATA']))
?>
<table>
 <tr>
    <td>NISN</td>
    <td>:</td>
    <td>
        <?= $_POST['NISN']?>
</td>
    </tr>

    <tr>
    <td>Nama Lengkap (NAMA LENGKAP HARUS SESUAI!)</td>
    <td>:</td>
    <td>
        <?= $_POST['NamaLengkap1']?>
</td>
    </tr>

    <tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td>
        <?= $_POST['TempatLahir']?>
</td>
    </tr>

    <tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td>
        <?= $_POST['TanggalLahir']?>
</td>

    <tr>
    <td>Gender</td>
    <td>:</td>
    <td>
        <?= $_POST['Gender']?>
</td>
    </tr>

    <tr>
    <td>Agama</td>
    <td>:</td>
    <td>
        <?= $_POST['Agama']?>
</td>

    <tr>
    <td>Alamat</td>
    <td>:</td>
    <td>
        <?= $_POST['alamat']?>
</td>
    </tr>

    <tr>
    <td>Asal Sekolah</td>
    <td>:</td>
    <td>
        <?= $_POST['AsalSekolah']?>
</td>
    </tr>


    <tr>
    <td>Pilihan Jurusan 1</td>
    <td>:</td>
    <td>
        <?= $_POST['Jurusan']?>
</td>
    </tr>

    <tr>
    <td>Pilihan Jurusan 2</td>
    <td>:</td>
    <td>
        <?= $_POST['Jurusan2']?>
</td>
    </tr>
    
    <tr>
    <td>Ekstrakulikuler</td>
    <td>:</td>
    <td>
        <?= implode("-",$_POST['Ekskul'])?>
</td>
    </tr>

</table>
</body>
</html>