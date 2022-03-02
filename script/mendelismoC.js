var pos = 0;
let vistas=['#1','#2','#3','#4','#5','#6'];
$('#contenido-boton').empty();
var html = $(vistas[pos]).html();
$('#contenido-boton').append(html);

$(document).ready(function () {
    $('#ade').click(function (e) { 
        e.preventDefault();
        pos = pos + 1; 
        if (pos == 5){
            $('#ade').hide();
        }
        if (pos != 0){
            $('#atr').show();
        }
        $('#contenido-boton').empty();
        var html = $(vistas[pos]).html();
        $('#contenido-boton').append(html);
        $('#contenido-boton').hide().fadeIn(2000);
        $("#link").get(0).click();
    });

    $('#atr').click(function (e) { 
        e.preventDefault();
        pos = pos - 1; 
        if (pos == 0){
            $('#atr').hide();
        }
        if (pos != 5){
            $('#ade').show();
        }
        $('#contenido-boton').empty();
        var html = $(vistas[pos]).html();
        $('#contenido-boton').append(html);
        $('#contenido-boton').hide().fadeIn(2000);
        $("#link").get(0).click();
    });

});