var cont = 0;
$('#reinicio').hide();

function validar(obj,obj1,txt){
    obj.click(function (e) { 
        e.preventDefault();
        texto = obj.text();
        if( obj.attr('id') == txt){
            obj.addClass("correcto");
        }
        else{
            obj.addClass("incorrecto");
        }
        obj1.addClass("sin-eventos");
        cont = cont + 1;
        if (cont == 10){
            $('#reinicio').show();
        }
    });
}

preguntas = {
    id:['#p1r1','#p1r2','#p1r3','#p1r4','#p2r1','#p2r2','#p2r3','#p2r4','#p3r1','#p3r2','#p3r3','#p3r4',
        '#p4r1','#p4r2','#p4r3','#p4r4','#p5r1','#p5r2','#p5r3','#p5r4','#p6r1','#p6r2','#p6r3','#p6r4',
        '#p7r1','#p7r2','#p7r3','#p7r4','#p8r1','#p8r2','#p8r3','#p9r1','#p9r2','#p9r3','#p9r4',
        '#p10r1','#p10r2','#p10r3','#p10r4'],
    contenedor:['#p1','#p1','#p1','#p1','#p2','#p2','#p2','#p2','#p3','#p3','#p3','#p3',
                '#p4','#p4','#p4','#p4','#p5','#p5','#p5','#p5','#p6','#p6','#p6','#p6',
                '#p7','#p7','#p7','#p7','#p8','#p8','#p8','#p9','#p9','#p9','#p9',
                '#p10','#p10','#p10','#p10'],
    respuesta:["p1r4","p1r4","p1r4","p1r4","p2r3","p2r3","p2r3","p2r3","p3r1","p3r1","p3r1","p3r1",
               "p4r4","p4r4","p4r4","p4r4","p5r4","p5r4","p5r4","p5r4","p6r2","p6r2","p6r2","p6r2",
               "p7r2","p7r2","p7r2","p7r2","p8r2","p8r2","p8r2","p9r4","p9r4","p9r4","p9r4",
               "p10r4","p10r4","p10r4","p10r4"]
};


$(document).ready(function () {
    for(var i = 0; i < preguntas.id.length; i++){
        validar($(preguntas.id[i]),$(preguntas.contenedor[i]),preguntas.respuesta[i]);
    }
});