<html>
    <head>
        <title>Latihan Praktikum3</title>
    </head>
    <body>
        
    <?php
    
        // Luas Segitiga
        echo"<h2>Luas Segitiga</h2>";
        
        $alas = 6;
        $tinggi = 4;
        
        echo"Alas = $alas cm<br>";
        echo"Tinggi = $tinggi cm<br>";
        
        $luas_segitiga = (1/2) * $alas * $tinggi;
        
        echo"Luas Segitiga adalah $luas_segitiga cm";
        echo"<hr>";
        
        
        // Luas Lingkaran
        echo"<h2>Luas Lingkaran</h2>";
        
        $jari2 = 20;
        $pi = 3.14;
        
        echo"Jari-jari = $jari2 <br>";
        echo"Phi = $pi<br>";
        
        $luas_lingkaran = $pi * $jari2 * $jari2;
        
        echo"Luas Lingkaran adalah $luas_lingkaran cm<sup>2</sup>";
        echo"<hr>";
        
        
        // Nama : Arif Nur Ramadhan
        // Nim  : 10522014
        
        // Luas Persegi Panjang
        echo"<h2>Luas Persegi Panjang</h2>";

        $panjang = 10;
        $lebar = 6;

        echo"Panjang = $panjang cm<br>";
        echo"Lebar = $lebar cm<br>";

        $luas_persegi_panjang = $panjang * $lebar;

        echo"Luas Persegi Panjang adalah $luas_persegi_panjang cm";
    ?>

    </body>
</html>