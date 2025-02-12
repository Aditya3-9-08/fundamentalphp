<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan CV. Tekno Nusa</title>
</head>

<body>

    <?php if (isset($_POST['KIRIM'])) {
        $gajiPerbulan = floatval($_POST['total_gaji_perbulan']);
        $npwp = $_POST['npwp'];
        $gajiTahunan = $gajiPerbulan * 12;

        if ($gajiTahunan > 54000000) {
            if ($npwp == 'YES') {
                $potonganPajak = $gajiTahunan * 0.15;
                $pajak = 0;
            } else {
                $potonganPajak = $gajiTahunan * 0.20;
                $pajak = 0;
            }
        } else {
            $potonganPajak = 0;
        }
        $gajiBersihBulanan = ($gajiTahunan - $potonganPajak) / 12;
        // echo $gajiBersihBulanan;
        $potonganPajakBulanan = $potonganPajak / 12;
        $gajiKotorBulanan = $gajiTahunan / 12;
    } ?>

    <table border=1 style="border-colaapse : width : 50%">
        <tr>
            <td>KARYAWAN</td>
            <td>:</td>
            <td>
                <?= $_POST['NAMA']; ?>
            </td>
        </tr>

        <tr>
            <td>Divisi</td>
            <td>:</td>
            <td>
                <?= $_POST['Divisi']; ?>
            </td>
        </tr>

        <tr>
            <td>Gaji</td>
            <td>:</td>
            <td>
                <?= $_POST['total_gaji_perbulan']; ?>
            </td>
        </tr>

        <tr>
            <td>NPWP</td>
            <td>:</td>
            <td>
                <?= $_POST['npwp']; ?>
            </td>
        </tr>

        <tr>
            <td>Gaji Kotor Pertahunnya</td>
            <td>:</td>
            <td>
                <?= number_format($gajiTahunan, 0, ',', '.') ?>
            </td>
        </tr>

        <tr>
            <td>Potongan Pajak Bulanan</td>
            <td>:</td>
            <td>
                <?= number_format($potonganPajakBulanan, 0, ',', '.') ?>
            </td>
        </tr>

        <tr>
            <td>Gaji Bersih Pertahunnya</td>
            <td>:</td>
            <td>
                <?= number_format($gajiBersihBulanan, 0, ',', '.') ?>
            </td>
        </tr>

    </table>

</body>

</html>