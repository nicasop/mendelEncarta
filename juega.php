<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilosj.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@700&display=swap" rel="stylesheet">
    <title>Juega y Aprende</title>
</head>
<body>
    <div class="icono_home">
        <a href="index.php"><img src="imagenes/home.png"></a>
    </div>
    <header>
    <div id="demotext">Juega y Aprende</div>
    <div class="menu">
        <div class="boton boton1">
            <a href="juega.php?id=6">Infografía</a>
        </div>
        <div class="boton boton2" >
            <a href="juega.php?id=1">Juego 1</a>
        </div>
        <div class="boton boton3">
            <a href="juega.php?id=2">Juego 2</a>
        </div>
        <div class="boton boton4">
            <a href="juega.php?id=3">Juego 3</a>
        </div>
        <div class="boton boton5">
            <a href="juega.php?id=4">Juego 4</a>
        </div>
        <div class="boton boton1">
            <a href="juega.php?id=5">Test</a>
        </div>
    </div>
    </header>
    <section>
        <?php
            $id = 6;
            if (isset($_REQUEST["id"])){
                $id =  $_REQUEST["id"];
            }
 
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
            else if( $id ==4){
                echo   '<iframe src ="https://es.educaplay.com/recursos-educativos/11493118-leyes_de_mendel.html">
            
                    </iframe>';
            }
            else if ($id ==5){
                echo '
                     <main>
            <ol>
                <li>
                    <div id="p1" class="contenedor-pregunta">
                        <div class="pregunta">CON QUÉ EXPERIMENTÓ MENDEL</div>
                        <div class="respuestas">
                            <div id="p1r1" class="resp"><span class="op1">a</span>Flores</div>
                            <div id="p1r2" class="resp"><span class="op2">b</span>Ratas</div>
                            <div id="p1r3" class="resp"><span class="op3">c</span>Mosca</div>
                            <div id="p1r4" class="resp"><span class="op4">d</span>Guisantes</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p2" class="contenedor-pregunta">
                        <div class="pregunta">CUANDO SE CRUZAN DOS LÍNEAS PURAS, ¿CÓMO SE LLAMA LA HERENCIA EN LA CUAL LA DESCENDENCIA PRESENTA EL MISMO RASGO QUE UNO DE LOS PROGENITORES?</div>
                        <div class="respuestas">
                            <div id="p2r1" class="resp"><span class="op1">a</span>Herencia recesiva</div>
                            <div id="p2r2" class="resp"><span class="op2">b</span>Herencia intermedia</div>
                            <div id="p2r3" class="resp"><span class="op3">c</span>Herencia dominante</div>
                            <div id="p2r4" class="resp"><span class="op4">d</span>Herencia codominante</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p3" class="contenedor-pregunta">
                        <div class="pregunta">EL CRUZAMIENTO PRUEBA ES UN CRUCE CON UN:</div>
                        <div class="respuestas">
                            <div id="p3r1" class="resp"><span class="op1">a</span>Homocigoto recesivo</div>
                            <div id="p3r2" class="resp"><span class="op2">b</span>Homocigoto dominante</div>
                            <div id="p3r3" class="resp"><span class="op3">c</span>Homocigoto dominante o recesivo</div>
                            <div id="p3r4" class="resp"><span class="op4">d</span>Heterocigoto</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p4" class="contenedor-pregunta">
                        <div class="pregunta">LA TERCERA LEY DE MENDEL ES:</div>
                        <div class="respuestas">
                            <div id="p4r1" class="resp"><span class="op1">a</span>La Ley de la conducción independiente</div>
                            <div id="p4r2" class="resp"><span class="op2">b</span>La Ley de la Uniformidad Independiente</div>
                            <div id="p4r3" class="resp"><span class="op3">c</span>La ley de la segregación independiente</div>
                            <div id="p4r4" class="resp"><span class="op4">d</span>La Ley de la transmisión independiente</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p5" class="contenedor-pregunta">
                        <div class="pregunta">UN INDIVIDUO TIENE DOS ALELOS DIFERENTES DE UN MISMO CARÁCTER, SE DICE QUE ES:</div>
                        <div class="respuestas">
                            <div id="p5r1" class="resp"><span class="op1">a</span>Heterocigótico dominante</div>
                            <div id="p5r2" class="resp"><span class="op2">b</span>Homocigótico dominante</div>
                            <div id="p5r3" class="resp"><span class="op3">c</span>Heterocigótico recesivo</div>
                            <div id="p5r4" class="resp"><span class="op4">d</span>Heterocigótico</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p6" class="contenedor-pregunta">
                        <div class="pregunta">LA LEY DE MENDEL SOBRE LA SEGREGACIÓN DE LOS ALELOS DICE:</div>
                        <div class="respuestas">
                            <div id="p6r1" class="resp"><span class="op1">a</span>Los alelos de genes distintos se separan en los gametos</div>
                            <div id="p6r2" class="resp"><span class="op2">b</span>Los dos alelos de un mismo gen se separan al formarse los gametos</div>
                            <div id="p6r3" class="resp"><span class="op3">c</span>Los gametos llevan un alelo de cada progenitor</div>
                            <div id="p6r4" class="resp"><span class="op4">d</span>Cada progenitor lleva como mínimo dos alelos</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p7" class="contenedor-pregunta">
                        <div class="pregunta">EL PADRE DE LA GENÉTICA MODERNA FUE:</div>
                        <div class="respuestas">
                            <div id="p7r1" class="resp"><span class="op1">a</span>William Batenson</div>
                            <div id="p7r2" class="resp"><span class="op2">b</span>Gregor Johann Mendel</div>
                            <div id="p7r3" class="resp"><span class="op3">c</span>James D. Watson</div>
                            <div id="p7r4" class="resp"><span class="op4">d</span>Anton van Leeuwenhock</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p8" class="contenedor-pregunta">
                        <div class="pregunta">CARACTERÍSTICA FUNDAMENTAL DEL CÓDIGO GENÉTICO ES QUE ES</div>
                        <div class="respuestas">
                            <div id="p8r1" class="resp"><span class="op1">a</span>Exacto</div>
                            <div id="p8r2" class="resp"><span class="op2">b</span>Específico de cada individuo</div>
                            <div id="p8r3" class="resp"><span class="op3">c</span>Degenerado</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p9" class="contenedor-pregunta">
                        <div class="pregunta">SEGÚN MENDEL, LOS "FACTORES HEREDITARIOS" SE TRANSMITEN A LA DESCENDENCIA DE MODO</div>
                        <div class="respuestas">
                            <div id="p9r1" class="resp"><span class="op1">a</span>Siempre acoplado</div>
                            <div id="p9r2" class="resp"><span class="op2">b</span>Unidos los alelos que determinan un carácterRatas</div>
                            <div id="p9r3" class="resp"><span class="op3">c</span>Todas las contestaciones son correctas</div>
                            <div id="p9r4" class="resp"><span class="op4">d</span>Independiente uno del otro, los alelos de cada carácter</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="p10" class="contenedor-pregunta">
                        <div class="pregunta">EL CÓDIGO GENÉTICO ESTÁ FORMADO POR:</div>
                        <div class="respuestas">
                            <div id="p10r1" class="resp"><span class="op1">a</span>Tripletes de bases y es solapado y universal</div>
                            <div id="p10r2" class="resp"><span class="op2">b</span>Pares de bases y es universal</div>
                            <div id="p10r3" class="resp"><span class="op3">c</span>Pares de bases y la replicación es bidireccional</div>
                            <div id="p10r4" class="resp"><span class="op4">d</span>Tripletes de bases y es degeneradot</div>
                        </div>
                    </div>
                </li>
            </ol>
            <a id="reinicio" class="reiniciar" href="juega.php?id=5">Reiniciar</a>
        </main>
                ';
            }
            else{
                echo '<div style="position: relative; width: 100%; height: 0; padding-top: 250.0000%;
 padding-bottom: 48px; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAE3gXnJMI0&#x2F;view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>';
            }
        ?>

</section>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="script/testscript.js"></script>
</html>