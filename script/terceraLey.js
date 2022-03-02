var respuesta = ""
respuestas =['<section><div class="divD"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/XzgWw59yjrY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div></section>',
'<section>'+
        '<div class="divD">'+
            '<div class="act1">'+
            '<p>Se cruza una pareja de perros pastor alemán ambos heterocigotos dominantes de orejas rectas y pelo corto (CcLl) ¿qué probabilidad genotípica y fenotípica tendrá su descendencia?</p>'+
            '</div>'+
            '<div class="titulo">Parentales Heterocigotos</div>'+
            '<img class="img1" src="imagenes/ley3_1.png" alt="imagen de parientes heterocigotos">'+
            '<div class="act2">'+
                '<div class="contenido">'+
                    '<div class="titulo titulo-flex">F2 Cuadros de Punnet</div>'+
                    '<div class="img-contenido"><img src="imagenes/tabla1ley3.png" alt="cuadro de punnet"></div>'+
                '</div>'+
                '<div class="contenido">'+
                    '<div class="titulo titulo-flex">Fenotipo</div>'+
                    '<div class="img-contenido"><img src="imagenes/tabla2ley3.png" alt="Fenotipo"></div>'+
                '</div>'+
            '</div>'+
           '<div class="act3">'+
                '<div class="titulo">Resultados</div>'+   
                '<div class="titulo">Probabilidad de Genotipo y Fenotípico</div>'+
                '<div class="imagenes-resultado">'+
                    '<div class="imagen-resultado"><img src="imagenes/tabla3ley3.png" alt="resultado1"></div>'+
                    '<div class="imagen-resultado" ><img src="imagenes/tabla4ley3.png" alt="resultado2"></div>'+
                '</div>'+
           '</div>'+
        '</div>'+
    '</section>'];

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

