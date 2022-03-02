$(document).ready(function () {
    $("#sig1").click(function (e) { 
        e.preventDefault();
        $('#imagenMendel').fadeOut(2000);
        $('#textohoja1').fadeOut(2000);
        $('#sig1').fadeOut(2000);
        $('#conte_b').fadeIn(2000);
        $('#sig2').fadeIn(2000);
        $('#video').fadeIn(2000);
        $('#titulo_pag2').fadeIn(2000);
    });
   
});

$(document).ready(function () {
    $("#atras1").click(function (e) { 
        e.preventDefault();
        $('#imagenMendel').fadeIn(2000);
        $('#textohoja1').fadeIn(2000);
        $('#sig1').fadeIn(2000);
        $('#conte_b').fadeOut(2000);
        $('#sig2').fadeOut(2000);
        $('#video').fadeOut(2000)
        $('#titulo_pag2').fadeOut(2000);
    });
   
});

$(document).ready(function () {
    $("#sig2").click(function (e) { 
        e.preventDefault();
        $('#sig2').fadeOut(2000);
        $('#video').fadeOut(2000)
        $('#titulo_pag2').fadeOut(2000);
        $('#atras1').fadeOut(2000);
        $('#textohoja2').fadeIn(2000);
        $('#imagenMendel2').fadeIn(2000);
        $('#conte_b2').fadeIn(1000);
    });
   
});

$(document).ready(function () {
    $("#atras2").click(function (e) { 
        e.preventDefault();
        $('#sig2').fadeIn(2000);
        $('#video').fadeIn(2000)
        $('#titulo_pag2').fadeIn(2000);
        $('#atras1').fadeIn(2000);
        $('#textohoja2').fadeOut(2000);
        $('#imagenMendel2').fadeOut(2000);
        $('#conte_b2').fadeOut(2000);
    });
   
});