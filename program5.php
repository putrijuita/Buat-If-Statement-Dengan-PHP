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

                <label>Mengecek Tahun Kabisat Atau Tidak</label><br><br>

                <form>
                
                    <label for="tahun" class="label">Masukkan Tahun</label>

                    <input type="text" id="tahun" name="tahun" placeholder="Masukan Tahun " class="input">

                    <br><br><br>

                    <button type="submit" name="Tahun" class="button">Periksa</button>
              
                </form>

                <br>
              
                <div id="Hasil">

                    <?php


                        if (isset($_GET["Tahun"])){

                            $tahun =  $_GET["tahun"];

                            if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
    
                                echo $tahun . " adalah tahun kabisat";
    
                            } else {
    
                                echo $tahun . " bukan tahun kabisat";
    
                            }

                        }
                    
                    ?>

                </div>

            </section>
        
        </main>

    </body>
    
</html>