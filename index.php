<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1> Asas PHP </h1>

    <?php
    //komen sebaris
    #komen sebaris
    /*banyak baris
    */

    $namapelajar = 'Nik Dania Ariesya';
    echo "<h2>HELLO $namapelajar </h2>"; #output

    $hadir = false;
    $umur = 20;
    $nokp = '0133872125';

    ?>

    <p>
        <?php
        echo 20 . 21;
        ?>
        </p>

        <h2>
            <?php
            $bandar = 'Seri Kembangan';
            $baru = 'Bandar ';
            for($x =0; $x < strlen($bandar); $x++) {
            $baru .=$bandar[$x] . ' ';
            }
            echo $baru;
            ?>
            </h2>

</body>
</html>