<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan CV. Tekno Nusa</title>
</head>
<body>
    <form action="proses2.php" method="POST">
        <fieldset>
            <legend><h1>APLIKASI PERHITUNGAN GAJI</h1></legend>
            <p>
                <label>KARYAWAN :</label>
                 <input type="text" name="NAMA" placeholder="Masukkan Nama" required>
            </p>
            <p>
                <label>INPUT DIVISI ANDA :</label>
                <input type="text" name="Divisi" placeholder="Divisi Anda Di Perusahaan" required>
            </p>
            <p>
                <label>GAJI PERBULAN :</label>
                <input type="number" name="total_gaji_perbulan" placeholder="Input Data Gaji Perbulan Anda" required>
            </p>Z
            <p>
                <label>APAKAH ANDA MEMILIKI NPWP ? (YES / NO) :</label>
                <input type="radio" name="npwp" value="YES" required>YES
                <input type="radio" name="npwp" value="NO" required>NO
            </p>
            <p>
            <input type="submit" name="KIRIM" value="KIRIMKAN DATA">
            </p>
        
        </fieldset>
    </form>
 
</body>
</html>