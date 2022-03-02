<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosv.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
        
    <title>Videos</title>
</head>
<body>
   
    <header>
    <div class="icono_home">
        <a href="index.php"><img src="imagenes/home.png"></a>
    </div>
      
    </header>
   
    <div class="main_boton">
        <div class="botones"> 
        <a href="videos.php?id=1"><img src="imagenes/boton1_1.png" style="width: 100%; height: 100%;"></a>
       
        </div>
        <div class="botones">
        <a href="videos.php?id=2"><img src="imagenes/boton1_2.png" style="width: 100%; height: 100%;"></a>
 </div>
       
        <div class="botones"> 
        <a href="videos.php?id=3"><img src="imagenes/boton1_3.png" style="width: 100%; height: 100%;"></a>

        </div>
        <div class="botones"> 
        <a href="videos.php?id=4"><img src="imagenes/boton1_4.png" style="width: 100%; height: 100%;"></a>

        </div>
    </div>
    <div class ="contenedor">
    <?php
            $id = 0;
            if (isset($_REQUEST["id"])){
                $id =  $_REQUEST["id"];
            }
 
            if ($id == 1){
               echo ' <iframe width="100%" height="100%" src="https://www.youtube.com/embed/FR8cRbUxZFc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
              
            }
            else if( $id ==2){
                echo '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/LxBHcgt5rDk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            }
    
            else if( $id ==3){
                echo '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/xLgk2l6Gg2M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            }
            else if( $id ==4){
                echo '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/8Se-vCQhDsQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';

            }
           
        ?>
    </div>
</body>
</html>