<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosv.css">
    <title>Videos</title>
</head>
<body>
    <div class="icono_home">
        <a href="index.php"><img src="imagenes/home.png"></a>
    </div>
    <header>
    <div id="demotext">Juega y Aprende</div>
    <div class="menu">
        <div class="menu3d" >
            <a href="videos.php?id=1">Biografía de Mendel</a>
        </div>
        <div class="menu3d">
            <a href="videos.php?id=2">Video 2</a>
        </div>
        <div class="menu3d">
            <a href="videos.php?id=3">Video 3</a>
        </div>
      
    </div>
    </header>
    <section>
        <?php
            $id = 1;
            if (isset($_REQUEST["id"])){
                $id =  $_REQUEST["id"];
            }
 
            if ($id == 1){
               echo ' <iframe  src="https://www.youtube.com/embed/FR8cRbUxZFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
              
            }
            else if( $id ==2){
                echo ' <iframe  src="https://www.youtube.com/embed/FR8cRbUxZFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            }
            else {
                echo ' <iframe  src="https://www.youtube.com/embed/FR8cRbUxZFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            }
           
        ?>
</section>

</body>
</html>