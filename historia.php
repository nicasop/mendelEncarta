<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloh.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto&family=Sofia&display=swap" rel="stylesheet">
    <title>Historia de Mendel </title>
</head>
<body>
        <header>
            <div class="icono_home">
                <a href="index.php"><img src="imagenes/home.png"></a>
            </div>
            
            <div id="demotext">HISTORIA DE MENDEL</div></header>
            <div class="nube"> 
            <img src="imagenes/nube.png" style="width: 100%; height: 100%;">
            </div>
            <div class="textoNube" id="textoNube"><p>Gregor Mendel (1822-1884), un monje Austriaco, es considerado el padre de la Genética.
             Mendel pasó gran parte de su vida trabajando con chícharos, tratando de revelar el origen de las especies,
              sin imaginar, que terminaría explicando los principios de heredabilidad de caracteres (Curtis, 2007).
              Mendel eligió características que pudieran identificarse claramente para establecer los principios 
              de heredabilidad, durante varias generaciones. Él evidenció que las intervenciones del padre y de 
              la madre se manifestaban con desigualdad en los hijos, concluyendo que cada planta recibe características 
              de cada progenitor.</p> </div>
       <div class="conte_img">
        <img src="imagenes/mendel2.jpg" style="width: 100%; height: 100%;">


       </div>
       <div class="bandera1">
        <img src="imagenes/separador6.png" style="width: 100%; height: 100%;">

    </div>
       <div class="titulo1">
        <a href="historia.php?video1=1"><h1>Biografía <br> de Mendel </h1></a>

    </div>
    <?php 
          $video1 = 0;
          if (isset($_REQUEST["video1"])){
              $video1 =  $_REQUEST["video1"];
          }

          if ($video1 == 1){
            echo ' <section>
            <iframe  src="https://www.youtube.com/embed/FR8cRbUxZFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
           </section>';
          }
          else{
            echo ' <section>
        
            </section>';
          }

    ?>
      
       <div class="slide">
            <img src="imagenes/slide2_1.gif">
       </div>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

       <script type="text/javascript" src="script/nube.js"></script>

</body>
</html>