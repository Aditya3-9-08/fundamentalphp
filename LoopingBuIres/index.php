<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping Adit</title>
</head>

<body>
    <form action="" method="POST">
    <div>
        <label for="">Baris :</label>
        <input type="number" name="Baris">
        </br>
        <label for="">Kolom :</label>
        <input type="number" name="Kolom">
        </br>
        <button type="submit" name="submit">Gaskueuen</button>
    </div>
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $Barisan = $_POST['Baris'];
        $Kolom = $_POST['Kolom'];
    ?>
    <table border=1 style="width:75%;">
        <?php
        for ($i = 1; $i <= $Barisan; $i++) { 
             ?>
        <tr>
            <?php
             for ($j = 1; $j <= $Kolom; $j++) {
            ?>
            <td>
                &nbsp;
            </td>
            <?php
            }
            ?>
        </tr>
        <?php
        }
         ?>
    </table>
    <?php
        }
    ?>
</body>

</html>