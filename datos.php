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
        <a href="index.php"><img src="imagenes/home.png"></a>
    </div>
    <header>
    <div id="demotext">Datos Curiosos</div>
    <div class="menu">
        <div class="menu3d" >
            <a href="datos.php?id=1&id_t=5">Dato Curioso 1</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=2&id_t=5">Dato Curioso 2</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=3&id_t=5">Dato Curioso 3</a>
        </div>
        <div class="menu3d">
            <a href="datos.php?id=4&id_t=5">Dato Curioso 4</a>
        </div>
    </div>
    </header>
    <section>
    <?php
            $id = 1;
            $id_t = 5;
            if (isset($_REQUEST["id"]) && isset($_REQUEST["id_t"])){
                $id =  $_REQUEST["id"];
            }
 
            if ($id == 1){
                echo   '<div class="divD">
                    <p id="texto1">Sabías que sus experimentos analizaron siete características de los guisantes: color de la flor, posición de la flor en el tallo, color de la semilla, textura de la semilla, forma de la vaina, color de la vaina y altura de la planta.</p>
                    <div id="img1" class="contenedor_img"> 
                    <img src="imagenes/mendel.png" style="width: 100%; height: 100%;">

                    </div>
                    </div>';
            }
            else if( $id ==2){
                echo   '<div class="divD">
                <p id="texto2">Las leyes de la genética que él estableció pasaron desapercibidas 34 años hasta el día de su reconocimiento.</p>
                <div id="img2" class="contenedor_img"> 
                <img src="imagenes/videos.png" style="width: 100%; height: 100%;">

                </div>    
                </div>';
            }
            else if( $id ==3){
                echo   '<div class="divD">
                    <p id="texto3">Sabías que el resultado de sus experimentos dio lugar a lo que hoy se conoce como las LEYES DE MENDEL, que constituyen la base esencial de la GENÉTICA.</p>
                    <div id="img3" class="contenedor_img"> 
                    <img src="imagenes/home.png" style="width: 100%; height: 100%;">

                    </div>
                    </div>';
            }
            else if( $id ==4){
                echo   '<div class="divD">
                    <p id="texto4">Sabías que los descendientes de dos individuos que son RAZAS PURAS para un determinado carácter serán iguales para dicho carácter.</p>
                    <div id="img4" class="contenedor_img"> 
                    <img src="imagenes/geneMende.png" style="width: 100%; height: 100%;">

                    </div>
                    </div>';
            }
        ?>
    </section>
    <section class="titulodos_section">    <div id="demotext">¿Por qué no fue reconocido el trabajo de Mendel antes?</div>
</section>
    <div class="menu2">
        <div class="menu3d2" >
            <a href="datos.php?id=4&id_t=5">Razón 1</a>
        </div>
        <div class="menu3d2">
            <a href="datos.php?id=4&id_t=6">Razón 2</a>
        </div>
        <div class="menu3d2">
            <a href="datos.php?id=4&id_t=7">Razón 3</a>
        </div>
       
    </div>
    <section class ="iframe_dos">
    <?php
            $id_t = 5;
            if (isset($_REQUEST["id"]) && isset($_REQUEST["id_t"])){
                $id_t =  $_REQUEST["id_t"];
            }
 
            if ( $id_t == 5){
                echo   '<div class="divD">
                    <p id="texto1">
                    El trabajo de Mendel se publicó en una revista poco conocida y Mendel no hizo especiales esfuerzos para dar publicidad a su trabajo, por lo que muchos científicos no pudieron conocerlo.

                    </p>
                    <div id="img1" class="contenedor_img"> 
                    <img src="imagenes/mendel.png" style="width: 100%; height: 100%;">

                    </div>
                    </div>';
            }
            else if( $id_t == 6){
                echo   '<div class="divD">
                <p id="texto2">El trabajo de Mendel atrajo poca atención inicialmente. Se pensó que demostraba algo que ya se sabía, que era que la descendencia de híbridos recupera características de las líneas originales y no se consideró su verdadero potencial.</p>
                <div id="img2" class="contenedor_img"> 
                <img src="imagenes/videos.png" style="width: 100%; height: 100%;">

                </div>    
                </div>';
            }
            else if( $id_t == 7){
                echo   '<div class="divD">
                    <p id="texto3">No proporcionaba un mecanismo que explicara por qué se heredaban las características.</p>
                    <div id="img3" class="contenedor_img"> 
                    <img src="imagenes/home.png" style="width: 100%; height: 100%;">

                    </div>
                    </div>';
            }
        ?>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="script/letras.js"></script>
</body>
</html>