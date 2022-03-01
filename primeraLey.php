<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/primeraLey.css">
    
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
        
    <title>Primera Ley de Mendel</title>
</head>
<body>
    <header>
        <div class="icono_home">
            <a href="index.php"><img src="imagenes/home.png"></a>
        </div>
    </header>
    <div class="libreta">
        <img src="imagenes/libreta.png" style="width: 100%; height: 100%;">
    </div>

    <div class="bandera1">
        <img src="imagenes/separador.png" style="width: 100%; height: 100%;">

    </div>

    <div class="tabla">
        <img src="imagenes/tabla LeyesMen_padreGen.png" style="width: 100%; height: 100%;">

    </div>
    <div class="titulo1">
        <h1>Primera Ley</h1>

    </div>


    <div class="texto">
        <h1>Primera ley: principio de la uniformidad.</h1>
        <br>
        <p> La ley de la uniformidad determina que las razas puras poseen un gen dominante y un gen recesivo y que, al cruzar dos variedades de una especie de raza pura, cada uno de los hijos de la primera generación poseerá representaciones afines en su fenotipo. El genotipo dominante será el que determine el rasgo o rasgos principales de la primera generación del cruce.</p>
    </div>
    <div class="imgdoctora">
        <img src="imagenes/Imagen4.gif" style="width: 100%; height: 100%;">
        
    </div>
    <audio controls >
        <source  src="audio/primeraLeyAU.mp3" type="audio/ogg">
        <source  src="audio/primeraLeyAU.mp3" type="audio/mpeg">
      Your browser does not support the audio element.
      </audio>
    <br>

    <div class="bandera2">
        <img src="imagenes/separador.png" style="width: 100%; height: 100%;">

    </div>
    <div class="titulo2">
        <a href="primeraLey.php?video1=1"><h1>Video</h1></a>

    </div>
    <?php 
          $video1 = 0;
          if (isset($_REQUEST["video1"])){
              $video1 =  $_REQUEST["video1"];
          }

          if ($video1 == 1){
            echo ' <div class="video1">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jyhVPOWP2G8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
            </div>';
          }
          else{
            echo ' <div class="video1">
        
            </div>';
          }

    ?>


   
    
    <div class="bandera3">
        <img src="imagenes/separador.png" style="width: 100%; height: 100%;">

    </div>
    <div class="titulo3">
        <a href="primeraLey.php?gif=1"><h1>Principio de <br>Uniformidad</h1></a>

    </div>
    <?php 
          $gif = 0;
          if (isset($_REQUEST["gif"])){
              $gif =  $_REQUEST["gif"];
          }

          if ($gif == 1){
            echo ' <div class="video1">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jyhVPOWP2G8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
            </div>';
            echo '  <div class="gif">
            <img src="imagenes/priUniformidad.gif" style="width: 100%; height: 100%;">
        
            </div>';
          }
          else{
            echo ' <div class="gif">
            </div>';
          }

    ?>

    <div class="bandera4">
        <img src="imagenes/separador.png" style="width: 100%; height: 100%;">

    </div>
    <div class="titulo4">
        <a href="primeraLey.php?video2=1"><h1>Ejercicio</h1></a>

    </div>
    <?php 
          $video2 = 0;
          if (isset($_REQUEST["video2"])){
              $video2 =  $_REQUEST["video2"];
          }

          if ($video2 == 1){
            echo ' <div class="video1">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jyhVPOWP2G8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
            </div>';
            echo '  <div class="gif">
            <img src="imagenes/priUniformidad.gif" style="width: 100%; height: 100%;">
        
            </div>';
            echo ' <div class="video2">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/xLgk2l6Gg2M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>';
          }
          else{
            echo ' <div class="video2">
            </div>';
          }

    ?>
   

        <div class="espacio"> </div>


</body>
</html>