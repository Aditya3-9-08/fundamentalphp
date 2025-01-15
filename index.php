<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
//ini Konstanta
    //Karyawan menerima gaji pokok sebesar Rp5.000.000
    //Karyawan menerima bonus sebesar Rp500.000 untuk setiap proyek yang selesai.
    //Pajak penghasilan adalah 12% dari total pendapatan karyawan (gaji pokok + bonus).

    define("Gaji_Pokok",5000000); 
    define("Karyawan_Bonus",500000);
    define("Pajak_Proyek",0.12);

    $Jumlah_Proyek = 4;
    $Gaji_Bersih;

    $Jumlah_Proyek *= Karyawan_Bonus;
    $Gaji_PokokNya = Gaji_Pokok + $Jumlah_Proyek;
    $Pajak_ProyekNya = $Gaji_PokokNya * Pajak_Proyek;
    $Gaji_Bersih = $Gaji_PokokNya - $Pajak_ProyekNya;

    echo "Bonus Anda Karena Menyelesaikan Proyek Ini Adalah Sebesar $Jumlah_Proyek <br/>";
    echo "Ini Gaji Anda Setelah Ditambah Bonus Dari Proyek $Gaji_PokokNya <br/>";
    echo "Pajak Yang Anda Terima $Pajak_ProyekNya <br/>";
    echo "Gaji Bersih Anda Sebesar $Gaji_Bersih<br/>";
    ?>
</body>
</html>