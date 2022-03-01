<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosl.css">
    <title>Leyes</title>
</head>
<body>
    <div class="icono_home">
        <a href="index.php"><img src="imagenes/home.png"></a>
    </div>
    <header>
        <div id="demotext">MENDEL Y SUS GUISANTES</div>
    </header>
    <div class="cont_icon">
    <img src="imagenes/leyesMendel.png" style="width: 100%; height: 100%;">
    </div>
    <div class="menu">
        <div id="op1" class="menu3d opcion1" >
            <span>El monje del jardín: Gregor Mendel</span>
        </div>
        <div id="op2" class="menu3d opcion2">
            <span>Sistema modelo del Mendel: la planta de guisantes</span>
        </div>
    </div>

    <div class="slide">
        <img src="imagenes/slide2_1.gif">
    </div>

    <div id="contenido-boton"></div>


    <!-- <section>
        <div class="divD">
            <div class = "img">
                <img src="imagenes/mendelMarco.png" alt="Imagend de Gregor Mendel">
            </div>
            <div class = "contenido">
                <div class="titulo-contenido">GREGOR MENDEL, EL PADRE DE LA GENÉTICA</div>
                <div class="texto-contenido">Nacido en la actual República Checa, el monje agustino y biólogo Gregor Mendel
                    experimentó con la planta del guisante y desarrolló las famosas tres leyes de la genética conocidas como
                    las Leyes de Mendel.
                </div>
            </div>
        </div>
        <div class="audio">
            <audio controls >
                <source  src="audio/expMendel.mp3" type="audio/mpeg">
            </audio>
        </div>
    </section> -->
    <?php
            // $id = 1;
            // if (isset($_REQUEST["id"])){
            //     $id =  $_REQUEST["id"];
            // }
 
            // if ($id == 1){
            //     echo   '<div class="divD">
            //         <p id="texto1">
            //         <strong>Primera ley: principio de la uniformidad. </strong> <br>
            //         La ley de la uniformidad determina que las razas 
            //         puras poseen un gen dominante y un gen recesivo y 
            //         que, al cruzar dos variedades de una especie de raza
            //          pura, cada uno de los hijos de la primera generación
            //           poseerá representaciones afines en su fenotipo. 
            //           El genotipo dominante será el que determine el rasgo o 
            //           rasgos principales de la primera generación del cruce.
            //            Mendel utilizó chícharos que originaban semillas amarillas 
            //            A (gen dominante) y otras semillas verdes a (gen recesivo),
            //             por lo tanto, la semilla hija es amarilla.
                    
            //         </p>
            //         <section class="primera_audio">
            //         <audio controls>
            //             <source src="horse.ogg" type="audio/ogg">
            //             <source src="horse.mp3" type="audio/mpeg">
            //           Your browser does not support the audio element.
            //           </audio>
            //     </section>
            //         <div class="conte_primera_ley">
            //         <div class="primera_ley_img">
            //         <img src="imagenes/priUniformidad.gif" style="width: 100%; height: 100%;">
            //         </div>
            //         </div>
            //         </div>'
            //         ;
            // }
            // else if( $id ==2){
            //     echo   '<div class="divD">
            //         <p id="texto2">
            //         <strong>Segunda ley: principio de segregación. </strong> <br>
            //     La ley de la Segregación determina que debe existir 
            //     la separación del Alelo de cada uno de los pares de
            //      los progenitores para que se transfiera la información
            //       genética al hijo. En conclusión, cada padre aporta un
            //        alelo que se deriva de cada uno, Mendel obtuvo a partir
            //         de la segunda generación de cruce de semillas, algunas 
            //         de color verde por la separación de los alelos.
                    
            //         </p>
            //         <section class="primera_audio">
            //         <audio controls>
            //             <source src="horse.ogg" type="audio/ogg">
            //             <source src="horse.mp3" type="audio/mpeg">
            //           Your browser does not support the audio element.
            //           </audio>
            //     </section>
            //         <div class="conte_primera_ley">
            //         <div class="primera_ley_img">
            //         <img src="imagenes/prinSegrega.gif" style="width: 100%; height: 100%;">
            //         </div>
            //         </div>
            //         </div>'
            //         ;
            // }
            // else if( $id ==3){
            //     echo   '<div class="divD">
            //     <p id="texto3">
            //     <strong>Tercera ley: principio de la transmisión independiente.</strong> <br>
            //     La ley de la Herencia Independiente de Caracteres o Ley de la Asociación 
            //     Independiente determina que existen rasgos o características heredadas
            //      que son independientes, es decir, aisladas del fenotipo, lo cual no 
            //      afecta al patrón de herencia de otros rasgos.En el ejemplo las letras 
            //      mayúsculas representan a los alelos dominantes y las minúsculas a los
            //       alelos recesivos, al combinarse se producen diferentes variables.
                   
            //     </p>
            //     <br>
            //     <section class="primera_audio">
            //     <audio controls>
            //         <source src="horse.ogg" type="audio/ogg">
            //         <source src="horse.mp3" type="audio/mpeg">
            //       Your browser does not support the audio element.
            //       </audio>
            // </section>
            //     <div class="conte_primera_ley">
            //     <div class="primera_ley_img">
            //     <img src="imagenes/prinTransIndepen.gif" style="width: 100%; height: 100%;">
            //     </div>
            //     </div>
            //     </div>'
            //     ;
            // }
        ?>
    <!-- <section class="video">
        <iframe src="https://www.youtube.com/embed/LxBHcgt5rDk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="script/experimentos.js"></script>
</html>