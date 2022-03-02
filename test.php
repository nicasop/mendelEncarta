<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilot.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <title>Test</title>
</head>
<body>
        <header>
            <div class="icono_home">
                <a href="index.php"><img src="imagenes/home.png"></a>
            </div>
            <div id="demotext">Mendelismo Complejo</div>
        </header>

        <div class="controles">
            <div id="atr" class="boton" style="display: none;">Anterior</div>
            <div id="ade" class="boton">Siguiente</div>
        </div>

        <div class="fantasma">
            <a id="link" href="#contenido-boton"></a>
        </div>
        <div id="contenido-boton" class="contenedor"></div>

        <div id="1" class="contenedor ocultar" >
            <div class="titulo">MENDELISMO COMPLEJO</div>
            <div class="contenido">En los experimentos de Mendel la dominancia de uno de los caracteres era completa, lo que facilitó la extracción de conclusiones debido a la sencillez de los resultados estadísticos</div>
        </div>
        <div id="2" class="contenedor ocultar">
            <div class="titulo titulo-flex">HERENCIA INTERMEDIA</div>
            <div class="contenido">
                <div class="imagen-contenido">
                    <img src="imagenes/herenciaInterm.gif" alt="herencia intermedia">
                </div>
                <div class="texto-contenido">Herencia intermedia ocurre cuando los dos alelos presentes en un heterocigoto expresan un fenotipo intermedio entre el de los progenitores homocigóticos.</div>
            </div>
        </div>
        <div id="3" class="contenedor ocultar">
            <div class="titulo">ALELISMO MÚLTIPLE Y CODOMINANCIA</div>
            <div>
                <div class="imagen-contenido">
                    <img src="imagenes/menComple.png" alt="alelismo">
                </div>
                <div class="texto-contenido">Si los alelos son diferentes, normalmente se expresará el alelo dominante, mientras que el efecto del otro alelo, llamado recesivo, queda enmascarado. Pero cuando hay codominancia, entonces ningún alelo es recesivo y el fenotipo de ambos alelos es expresado.</div>
            </div>
            <br>
            <p>Interacción génica: consiste en la influencia que existe entre genes en la expresión de un fenotipo. Si esta interacción modifica las proporciones mendelianas.</p>
            <div class="lista">
                <ul>
                    <li>Simple dominante</li>
                    <li>Simple recesivo</li>
                    <li>Doble dominante, doble dominante y recesiva</li>
                </ul>
            </div>
            <div class="imagen-contenido">
                <img src="imagenes/menComple2.png" alt="alelismo">
            </div>
        </div>
        <div id="4" class="contenedor ocultar">
            <div class="titulo">GENES LETALES</div>
            <p>Un gel letal es aquel que dificulta el desarrollo normal de un individuo, provocando su muerte antes de que alcance la madurez sexual.</p>
            <div class="lista">
                <ul>
                    <li>En función de la fase de desarrollo en que actúan:
                        <div class="lista1">
                            <ul>
                                <li>Gaméticos</li>
                                <li>Cigóticos</li>
                            </ul>
                        </div>
                    </li>
                    <li>Según su dominancia pueden ser dominantes o recesivos.</li>
                    <li>Según su acción:
                        <div class="lista1">
                            <ul>
                                <li>Letales completos: producen la muerte en más de 90% de los individuos</li>
                                <li>Semiletales: mueren entre el 50% y el 90% de los portadores.</li>
                                <li>Subletales:  muere menos del 10% de la población portadora del gen.</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="imagen-contenido">
                <img src="imagenes/menComple3.png" alt="genes letales">
            </div>
        </div>
        <div id="5" class="contenedor ocultar">
            <div class="titulo">Herencia cuantitativa, continua o poligénica</div>
            <div>
                <div class="imagen-contenido">
                    <img src="imagenes/menComple4.png" alt="herencia">
                </div>
                <div class="texto-contenido">Este es el caso del color de piel, de los ojos o del pelo. Para estos casos se elaboró una hipótesis poligénica: existen muchos genes, situados en diferentes lugares de los cromosomas, cuyos efectos individuales son pequeños pero acumulativos. </div>
            </div>
        </div>
        <div id="6" class="contenedor ocultar">
            <div class="titulo">PREFORMISMO</div>
            <div>
                <p>El preformacionismo (también llamado preformismo o teoría preformista) se emplea en el terreno de la biología para aludir a la teoría que desarrollaron los defensores de la preformación. <br>
                <p>Según los preformacionistas, el desarrollo de la vida se concreta a partir del crecimiento de un homúnculo que se halla en el cigoto. <br>
                    <div class="lista1">
                        <ul>
                            <li>
                                Los partidarios del preformacionismo se distribuían en dos grandes grupos:
                            </li>
                        </ul>
                    </div>
                <p>El preformacionismo se oponía a la teoría de epigenesis, según la cual el organismo no está formado previamente en el cigoto. <br>
                <p>Aunque las ideas preformistas fueron desacreditadas y refutadas experimentalmente por los estudios embriológicos de Hans Driesh y Mangold-Spemann. <br>
                <p>Por último, el desarrollo y la aplicación del cálculo integral (también llamado integración o integrales. <br>
                <p>Y así llegamos a la época del preformismo conocida como neopreformismo, donde se defendió la teoría del desarrollo en mosaico. <br>
                <p>En la mitad del siglo XVIII, el preformismo comenzó a perder fuerza.
            </div>
        </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="script/mendelismoC.js"></script>
</html>