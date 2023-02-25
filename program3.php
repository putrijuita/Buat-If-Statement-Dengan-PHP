<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>5 Program PHP</title>
    
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <main>
        
            <h2>5 Program PHP</h2>
  
            <nav>
    
                <div class="dropdown hover">
      
                    <a href="index.php">Menu</a>
      
                    <ul>
                
                        <li><a href="program1.php">Positif Atau Negatif!</a></li>
            
                        <li><a href="program2.php">Genap Atau Ganjil!</a></li>
        
                        <li><a href="program3.php">Siswa Lulus Atau Tidak</a></li>
        
                        <li><a href="program4.php">kata Palindrom</a></li>
        
                        <li><a href="program5.php">Tahun Kabisat</a></li>
      
                    </ul>
    
                </div>
  
            </nav>
  
            <section>

                <label>Mengecek Apakah Siswa Lulus Atau Tidak</label><br><br>

                <form>
                
                    <label for="lulustidaklulus" class="label">Masukkan Nilai:</label>
    
                    <input type="number" id="lulustidaklulus" name="lulustidaklulus" placeholder="Masukan Nilai " class="input">

                    <br><br><br>
    
                    <button type="submit" name="Lulus-TidakLulus" class="button">Hitung</button>
              
                </form>

                <br>
              
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Lulus-TidakLulus"])){

                            $nilai = $_GET["lulustidaklulus"]; 

                            if ($nilai >= 60) {

                                 echo "Selamat, kamu lulus!";

                            } else {

                                echo "Maaf, kamu tidak lulus.";

                            }                     

                        }
                    
                    ?>

                </div>

            </section>
        
        </main>

    </body>
    
</html>