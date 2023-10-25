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
        $panjang = isset($_POST['panjang']) ? $_POST['panjang'] : 1;
        $lebar = isset($_POST['lebar']) ? $_POST['lebar'] : 1;
        $tinggi = isset($_POST['tinggi']) ? $_POST['tinggi'] : 1;
        $sisi = isset($_POST['sisi']) ? $_POST['sisi'] : 1;
        $r = isset($_POST['r']) ? $_POST['r'] : 1;
        $rt = isset($_POST['rt']) ? $_POST['rt'] : 1;
        $tt = isset($_POST['tt']) ? $_POST['tt'] : 1;

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
        <form method="post" action="">
                <label for="sisi">Masukkan Nilai Sisi Kubus:</label>
                <input type="number" name="sisi" id="sisi" required>
                <input type="submit" value="Hitung">
            </form>
            <?php
            echo "Sisi = $sisi cm<br>";
            echo "Rumus Volume = sisi³ <br>";
            echo "Volume Total = $volumekubus cm³<br>";
            echo "Volume Maksimal = $vmaks cm³<br>";
            echo "Volume Minimal = $vmin cm³<br>";
            
            // Menambahkan logika untuk lima kondisi
            if ($volumekubus == $vmaks){
                echo "Maka Volume total <b>sesuai dengan</b> $vmaks cm³ <i>volume maksimal</i> <br>";
            }
            elseif($volumekubus < $vmin){
                echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
            }
            elseif ($volumekubus > $vmaks){
                echo "Maka Volume total <b>lebih</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
            }
            elseif ($volumekubus < $vmaks){
                echo "Maka Volume total <b>kurang</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
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
        <form method="post" action="">
                <label for="panjang">Masukkan Nilai Panjang:</label>
                <input type="number" name="panjang" id="panjang" required>
                <label for="lebar">Masukkan Nilai Lebar:</label>
                <input type="number" name="lebar" id="lebar" required>
                <label for="tinggi">Masukkan Nilai Tinggi:</label>
                <input type="number" name="tinggi" id="tinggi" required> 
                <input type="submit" value="Hitung">
            </form>
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
         elseif($volumebalok < $vmin){
            echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
         }
         elseif ($volumebalok < $vmaks){
            echo "Maka Volume total <b>kurang</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
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
        <form method="post" action="">
                <label for="r">Masukkan Nilai Jari-Jari Bola:</label>
                <input type="number" name="r" id="r" required>
                <input type="submit" value="Hitung">
            </form>
        <?php
        echo "jari jari = $r cm<br>";
        echo "Rumus Volume = (4/3) πr³<br>";
        echo "Volume Total = $volumebola cm³<br>";
        echo "Volume Maksimal = $vmaks cm³<br>";
        echo "Volume Minimal = $vmin cm³<br>";
        if ($volumebola == $vmaks){
            echo "Maka Volume total <b>sesuai dengan</b> $vmaks cm³ <i>volume maksimal</i> <br>";
        }
        elseif($volumebola < $vmin){
            echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
         }
        elseif ($volumebola > $vmaks){
            echo "Maka Volume total <b>lebih</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
        elseif ($volumebola < $vmaks){
            echo "Maka Volume total <b>kurang</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         }
         else{
            echo "Maka Volume total <b>sesuai dengan</b> $vmin cm³ <i>volume minimal</i> <br>";
         }
         ?>
    </div></div>
    <div id="tabung">
    <a href="#"><img src="./img/tabung.png" alt="Bola" width="150px"></a>
    <div class="formula">
        <h2>Rumus tabung</h2>
        <form method="post" action="">
                <label for="rt">Masukkan Nilai Jari-Jari Tabung:</label>
                <input type="number" name="rt" id="rt" required>
                <label for="tt">Masukkan Nilai Tinggi Tabung:</label>
                <input type="number" name="tt" id="tt" required>
                <input type="submit" value="Hitung">
            </form>
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
        elseif($volumetb < $vmin)
            echo "Maka Volume total <b>kurang</b> dari $vmin cm³ <i>volume minimal</i> <br>";
        elseif ($volumetb < $vmaks)
            echo "Maka Volume total <b>kurang</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
        elseif ($volumetb > $vmaks)
            echo "Maka Volume total <b>lebih</b> dari $vmaks cm³ <i>volume maksimal</i> <br>";
         else{
            echo "Maka Volume total <b>sesuai dengan</b> $vmin cm³ <i>volume minimal</i> <br>";
         }
         ?>
    </div></div>
</body>
</html>