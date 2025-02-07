<!DOCTYPE html> 
<html lang="en"> 
<head> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <meta charset="UTF-8"> 
 <meta name="viewport" content="width=device-width, initial scale=1.0"> 
 <title>TUGAS ADITYA </title> 
<body> 
<form action="Proses.php" method="post"> 
 <p>Biodata PPDB 2025 KALIPUROANSSSS:</p> 
NISN : <input type="number" name="NISN" placeholder="Masukkan NISN"> <br />
Nama Lengkap (NAMA LENGKAP HARUS SESUAI!) : <input type="text" name="NamaLengkap1" placeholder="Nama Lengkap"> <br />
Tempat Lahir : <input type="text" name="TempatLahir" placeholder="Tempat Lahir">  <br />
Tanggal Lahir :<input type="date" name="TanggalLahir" placeholder="Tanggal Lahir">  <br />
Pilih Gender Lu Brokk! : <input type="radio" name="Gender" value="Laki-laki">Laki-laki  <input type="radio" name="Gender" value="Perempuan">Perempuan  <br />
Agama <select id="Agama" name="Agama">
    <option value="Tidak Memilih">Tidak Memilih</option> 
    <option value="Islam">Islam</option> 
    <option value="Hindu">Hindu</option>
    <option value="Kristen">Kristen</option> 
    <option value="Konghucu">Konghucu</option> 
    <option value="Katolik">Katolik</option>
    <option value="Budha">Budha</option>
    </select>
<br />  
 <p>Alamat:</p>
<textarea name="alamat" id="alamat" cols="30"
rows="10"></textarea> <br />
Asal Sekolah :<input type="text" name="AsalSekolah" placeholder="Asal Sekolah">  <br />
Pilihan Jurusan 1 <select id="Jurusan" name="Jurusan">
    <option value="Tidak Memilih">Tidak Memilih</option>
    <option value="PPLG">Pengembangan Perangkat Lunak Dan Gim</option> 
    <option value="AKL">Akutansi</option>
    <option value="KL">Kuliner</option> 
    <option value="PM">Pemasaran</option> 
    <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
    <option value="SP">Seni Pertunjukan</option>
    <option value="BDP">Brodcasting & Perfilman</option>
    <option value="PH">Perhotelan</option>
    <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi </option>
    <option value="DKV">Desain Komunikasi Visual</option>
    </select>
    <br />
    Pilihan Jurusan 2 <select id="Jurusan" name="Jurusan2">
        <option value="Tidak Memilih">Tidak Memilih</option>
        <option value="PPLG">Pengembangan Perangkat Lunak Dan Gim</option> 
        <option value="AKL">Akutansi</option>
        <option value="KL">Kuliner</option> 
        <option value="PM">Pemasaran</option> 
        <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis</option>
        <option value="SP">Seni Pertunjukan</option>
        <option value="BDP">Brodcasting & Perfilman</option>
        <option value="PH">Perhotelan</option>
        <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi </option>
        <option value="DKV">Desain Komunikasi Visual</option>
    </select> 
        <br />
        <label>Ekstrakulikuler:</label>
<input type="checkbox" name="Ekskul[]" value="Basket"> Basket 
 <input type="checkbox" name="Ekskul[]" value="English Club"> English Club 
 <input type="checkbox" name="Ekskul[]" value="Voli"> Voli 
 <input type="checkbox" name="Ekskul[]"value="Paskibra"> Paskibra
 <br/>
 <input type="checkbox" name="Ekskul[]"value="Palang Merah Remaja"> Palang Merah Remaja
 <input type="checkbox" name="Ekskul[]"value="Dewan Ambalan"> Dewan Ambalan
 <input type="checkbox" name="Ekskul[]"value="Pecinta Alamat"> Pecinta Alamat
 <input type="checkbox" name="Ekskul[]"value="Laskar Hijau"> Laskar Hijau
 <input type="checkbox" name="Ekskul[]"value="Remaja Masjid"> Remaja Masjid

 <br/>
 <button type="submit" name="submit" value="KIRIMKAN BIODATA"> KIRIMKAN BIODATA </button>
 </form> 
</body> 
</html>
