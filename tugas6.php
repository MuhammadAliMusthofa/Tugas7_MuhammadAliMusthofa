<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator simulator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    // membuat formula hitung untuk dapat ditampilkan pada form hasil
    if(isset($_POST['hitung'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        //switch digunakan untuk menentukan pilihan operasi pada option select
        switch ($operasi) {
            case 'tambah' :
                $hasil = $bil1 + $bil2;
                break;
            case 'kurang' :
                $hasil = $bil1 - $bil2;
                break;
            case 'kali' :
                $hasil = $bil1 * $bil2;
                break;
            case 'bagi' :
                $hasil = $bil1 / $bil2;
                break;
        }
    }
    ?>

    <!-- Tampilan UI Kalkulator sederhana yg dibagi dalam beberapa class untuk memudahkan styling CSS -->
    <div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
        <form method="post" action="tugas6.php">
            <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
            <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan kedua">
            <select class="opt" name="operasi" >
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <input type="submit" value="hitung" name="hitung" class="tombol">

        </form>

        <!-- Jika operasi hitung dilakukan maka tampilkan hasil , jika tidak maka tampilkan saja angka nol 0 -->
        <?php 
        if(isset($_POST['hitung'])){ ?>
        <input type="text" value="<?php echo $hasil; ?>" class="bil">
        <?php } else { ?>
              <input type="text"  value="0" class="bil" >
        <?php } ?>

    </div>
</body>  
</html>