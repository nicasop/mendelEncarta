<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosd.css">

    <title>Datos Curiosos</title>
</head>
<body>
<div class="icono_home">
        <a href="index.html"><img src="imagenes/home.png"></a>
    </div>
    <header>
    <div id="demotext">Datos Curiosos</div>
    <div class="menu">
        <div class="menu3d" >
            <a href="datos.php?id=1">Dato Curioso 1</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=2">Dato Curioso 2</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=3">Dato Curioso 3</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=4">Dato Curioso 4</a>
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
                echo   '<div class="divD">
                    <p id="texto1">Sabías que sus experimentos analizaron siete características de los guisantes: color de la flor, posición de la flor en el tallo, color de la semilla, textura de la semilla, forma de la vaina, color de la vaina y altura de la planta.</p>
                    </div>';
            }
            else if( $id ==2){
                echo   '<div class="divD">
                <p id="texto2">Las leyes de la genética que él estableció pasaron desapercibidas 34 años hasta el día de su reconocimiento.</p>
                    </div>';
            }
            else if( $id ==3){
                echo   '<div class="divD">
                    <p id="texto3">Sabías que el resultado de sus experimentos dio lugar a lo que hoy se conoce como las LEYES DE MENDEL, que constituyen la base esencial de la GENÉTICA.</p>
                    </div>';
            }
            else if( $id ==4){
                echo   '<div class="divD">
                    <p id="texto4">Sabías que los descendientes de dos individuos que son RAZAS PURAS para un determinado carácter serán iguales para dicho carácter.</p>
                    </div>';
            }
        ?>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="script/letras.js"></script>
</body>
</html>