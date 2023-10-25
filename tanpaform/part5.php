<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Ruang</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php 
        $panjang = 20;
        $lebar = 10;
        $tinggi = 5;
        $sisi = 5;
        $r = 5;
        $rt = 7;
        $tt = 25;

        $volumebola = 4/3 * 22/7 * $r * $r * $r;
        $volumekubus = $sisi * $sisi * $sisi;
        $volumebalok = $panjang * $lebar * $tinggi;
        $volumetb = 22/7 * $rt * $rt * $tt;
        $vmaks = 1000;
        $vmin = 125;
    ?>
    <h1>Beberapa Bangun Ruang</h1>
    <div id="kubus">
    <a href="#"><img src="./img/cube.png" alt="Kubus" width="150px"></a>
    <div class="formula">
        <h2>Rumus Kubus</h2>
        <?php
        echo "Sisi = $sisi cm<br>";
        echo "Rumus Volume = sisi³ <br>";
        echo "Volume Total = $volumekubus cm³<br>";
        echo "Volume Maksimal = $vmaks cm³<br>";
        echo "Volume Minimal = $vmin cm³<br>";
        if ($volumekubus == $vmaks){
            echo "Maka Volume total <b>sesuai dengan</b> $vmaks cm³ <i>volume maksimal</i> <br>";
        }
        elseif ($volumekubus > $vmaks){
            echo "Maka Volume total <b>lebih</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
        elseif($volumekubus < $vmin){
            echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
         }
         elseif($volumekubus > $vmin){
            echo "Maka Volume total <b>lebih</b> dari $vmin cm³ <i>volume minimal</i> <br>";
         }
         else{
            echo "Maka Volume total <b>sesuai dengan</b> $vmin cm³ <i>volume minimal</i> <br>";
         }
         ?>
    </div></div>
    <div id="balok">
    <a href="#"><img src="./img/balok.jpg" alt="Balok" width="200px"></a>
    <div class="formula">
        <h2>Rumus Balok</h2>
        <?php
        echo "Panjang = $panjang cm<br>";
        echo "Lebar = $lebar cm<br>";
        echo "Tinggi = $tinggi cm<br>";
        echo "Rumus Volume = p x l x t <br>";
        echo "Volume Total = $volumebalok cm³<br>";
        echo "Volume Maksimal = $vmaks cm³<br>";
        echo "Volume Minimal = $vmin cm³<br>";
        if ($volumebalok == $vmaks){
            echo "Maka Volume total <b>sesuai dengan</b> $vmaks cm³ <i>volume maksimal</i> <br>";
        }
        elseif ($volumebalok > $vmaks){
            echo "Maka Volume total <b>lebih</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
        elseif ($volumebalok < $vmaks){
            echo "Maka Volume total <b>kurang</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
         elseif($volumebalok < $vmin){
            echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
         }
         else{
            echo "Maka Volume total <b>sesuai dengan</b> $vmin cm³ <i>volume minimal</i> <br>";
         }
         ?>
    </div></div>
    <div id="bola">
    <a href="#"><img src="./img/bola.png" alt="Bola" width="150px"></a>
    <div class="formula">
        <h2>Rumus Bola</h2>
        <?php
        echo "jari jari = $r cm<br>";
        echo "Rumus Volume = (4/3) πr³<br>";
        echo "Volume Total = $volumebola cm³<br>";
        echo "Volume Maksimal = $vmaks cm³<br>";
        echo "Volume Minimal = $vmin cm³<br>";
        if ($volumebola == $vmaks){
            echo "Maka Volume total <b>sesuai dengan</b> $vmaks cm³ <i>volume maksimal</i> <br>";
        }
        elseif ($volumebalok > $vmaks){
            echo "Maka Volume total <b>lebih</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
        elseif ($volumebola < $vmaks){
            echo "Maka Volume total <b>kurang</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
         elseif($volumebola < $vmin){
            echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
         }
         else{
            echo "Maka Volume total <b>sesuai dengan</b> $vmin cm³ <i>volume minimal</i> <br>";
         }
         ?>
    </div></div>
    <div id="tabung">
    <a href="#"><img src="./img/tabung.png" alt="tabung" width="150px"></a>
    <div class="formula">
        <h2>Rumus tabung</h2>
        <?php
        echo "jari jari = $rt cm<br>";
        echo "jari jari = $tt cm<br>";
        echo "Rumus Volume = πr²t<br>";
        echo "Volume Total = $volumetb cm³<br>";
        echo "Volume Maksimal = $vmaks cm³<br>";
        echo "Volume Minimal = $vmin cm³<br>";
        if ($volumetb == $vmaks){
            echo "Maka Volume total <b>sesuai dengan</b> $vmaks cm³ <i>volume maksimal</i> <br>";
        }
        elseif ($volumebalok < $vmaks){
            echo "Maka Volume total <b>kurang</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
        elseif ($volumetb > $vmaks){
            echo "Maka Volume total <b>lebih</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
         elseif($volumetb < $vmin){
            echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
         }
         else{
            echo "Maka Volume total <b>sesuai dengan</b> $vmin cm³ <i>volume minimal</i> <br>";
         }
         ?>
    </div></div>
</body>
</html>