<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosj.css">
    <title>Juega y Aprende</title>
</head>
<body>
    <div class="icono_home">
        <a href="index.html"><img src="imagenes/home.png"></a>
    </div>
    <header>
    <div id="demotext">Juega y Aprende</div>
    <div class="menu">
        <div class="menu3d" >
            <a href="juega.php?id=1">Juego 1</a>
        </div>
        <div class="menu3d">
            <a href="juega.php?id=2">Juego 2</a>
        </div>
        <div class="menu3d">
            <a href="juega.php?id=3">Juego 3</a>
        </div>
        <div class="menu3d">
            <a href="juega.php?id=4">Juego 4</a>
        </div>
    </div>
    </header>
    <section>
        <?php
            $id =  $_REQUEST["id"];
 
            if ($id == 1){
                echo   '<iframe src ="https://es.educaplay.com/recursos-educativos/11490570-herencia_mendeliana.html">
            
                    </iframe>';
            }
            else if( $id ==2){
                echo   '<iframe src ="https://es.liveworksheets.com/5-lm196855uc">
            
                    </iframe>';
            }
            else if( $id ==3){
                echo   '<iframe src ="https://es.liveworksheets.com/5-ec196566ik">
            
                    </iframe>';
            }
            else{
                echo   '<iframe src ="https://es.educaplay.com/recursos-educativos/11493118-leyes_de_mendel.html">
            
                    </iframe>';
            }
        ?>
</section>

</body>
</html>