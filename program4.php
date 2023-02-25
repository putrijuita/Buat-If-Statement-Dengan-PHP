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

                <label>Kata Atau Kalimat Palindron Atau kidak</label><br><br>

                <form>
                
                    <label for="katakalimat" class="label">Masukkan Kata</label>

                    <input type="text" id="katakalimat" name="katakalimat" placeholder="Masukan Kata " class="input">

                    <br><br><br>

                    <button type="submit" name="Kata-Kalimat" class="button">Periksa</button>
              
                </form>

                <br>
              
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Kata-Kalimat"])){

                            $kata = $_GET["katakalimat"];

                            $kata_balik = strrev($kata); 

                            if ($kata == $kata_balik) {

                                echo $kata . " adalah palindrom";

                            } else {

                                echo $kata . " bukan palindrom";

                            }

                        }
                    
                    ?>

                </div>

            </section>
        
        </main>

    </body>
    
</html>