var respuesta = ""
respuestas =['<section><div class="divD"><div class = "img"><img src="imagenes/mendelMarco.png" alt="Imagend de Gregor Mendel"></div><div class = "contenido"><div class="titulo-contenido">GREGOR MENDEL, EL PADRE DE LA GENÉTICA</div> <div class="texto-contenido">Nacido en la actual República Checa, el monje agustino y biólogo Gregor Mendel experimentó con la planta del guisante y desarrolló las famosas tres leyes de la genética conocidas como las Leyes de Mendel.</div></div></div><div class="audio"><audio controls ><source  src="audio/expMendel.mp3" type="audio/mpeg"></audio></div></section>',
'<section class="video"><iframe src="https://www.youtube.com/embed/LxBHcgt5rDk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></section>'];

$(document).ready(function () {
    $("#op1").click(function (e) { 
        e.preventDefault();
        respuesta = respuestas[0]
        $('#contenido-boton').empty();
        $("#contenido-boton").append(respuesta);
        $('#contenido-boton').hide().fadeIn(2000);
        $("#link").get(0).click();
    });
    $("#op2").click(function (e) { 
        e.preventDefault();
        respuesta = respuestas[1]
        $('#contenido-boton').empty();
        $("#contenido-boton").append(respuesta).fadeIn(1500);
        $('#contenido-boton').hide().fadeIn(2000);
        $("#link").get(0).click();
    });
});
