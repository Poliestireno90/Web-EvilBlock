<!DOCTYPE html>
<html lang="es-ES">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="images/pixel-art128px.ico" type="image/x-icon">

  <head>
    <title>Bloquear internet</title>
  </head>

<body>
  <header>
    <h1>Evil <span>Block</span> </h1>
  </header>
  <div class="main">




    <div class="imagen">
      <img src="/images/pixel-art-fnal.png" alt="">
    </div>
    
      <div class="botones">

        <form class="bloquear" method="post">
          <input type="submit" name="ejecutar" value="Bloquear Internet">
        </form>

        <!-- ejecuta el bash que ejecuta el bloquear.py -->
        <?php
      if(isset($_POST['ejecutar'])) {
        $output = shell_exec('sudo python3 /var/www/Web-EvilBlock/EvilBlock.py');
        
        $ruta_archivo = '/var/www/Web-EvilBlock/ip.txt';
       /* $contenido_archivo = file_get_contents($ruta_archivo);*/
        echo '<div class="output"><p><pre>';/*' . $contenido_archivo . '</p></div>';*/
 $fichero = fopen($ruta_archivo, "r");
 
    while (!feof($fichero)){ 
         $linea = fgets($fichero);
         echo $linea;
         echo '<br/>';       
    } 
	echo '</pre></p></div>';
    fclose($fichero); 
      }
    ?>

        <div class="separacion-botones"></div>
        <form class="devolver" method="post">
          <input type="submit" name="ejecutar2" value="Devolver Internet">
        </form>

        <!-- Devuelve el internet -->
        <?php
      if(isset($_POST['ejecutar2'])) {
        $output = shell_exec('sudo pkill -f EvilBlock.py');
       
      }
    ?>
        
      
      
    </div>

<div class="output">
          IP's de la red:
          <pre><?php echo file_get_contents("/var/www/Web-EvilBlock/ip.txt"); ?> 
 </pre>
        </div>
 
  </div>
  <footer>
    <p class="texto-footer"> &copy;2023 Projecto 3 Victor,Crsitian Basso, Francisco.</p>
    <p class="web-design">Web Design: Víctor</p>
  </footer>
</body>

</html>
