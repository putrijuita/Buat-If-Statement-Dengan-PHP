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

                <label>Bilangan Bulat Positif Atau Negatif!</label><br><br>

                <form>
                
                    <label for="positifnegatif" class="label">Masukkan Nilai:</label>
                
                    <input type="number" id="positifnegatif" name="positifnegatif" placeholder="Masukan Nilai " class="input">

                    <br><br><br>
                
                    <button type="submit" name="Positif-Negatif" class="button">Hitung</button>
              
                </form>

                <br>
              
                <div id="Hasil">

                    <?php

                        if (isset($_GET["Positif-Negatif"])){

                            $bilangan = $_GET["positifnegatif"];

                            if ($bilangan > 0) {
                        
                                echo "Bilangan $bilangan adalah bilangan positif.";
    
                            } else if ($bilangan < 0) {
        
                                echo "Bilangan $bilangan adalah bilangan negatif.";
    
                            } else {
        
                                echo "Bilangan $bilangan adalah nol.";
    
                            }

                        }
                    
                    ?>

                </div>

            </section>
        
        </main>

    </body>
    
</html>