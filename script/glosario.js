$(document).ready(function () {
    $("#adelante").click(function (e) { 
        e.preventDefault();
        $('#caja1_t').fadeOut(2000);
        $('#adelante').hide();;
        $('#atras').show();
        $('#adelante2').show();
        $('#caja2_t').fadeIn(2000);
    });
});


$(document).ready(function () {
    $("#atras").click(function (e) { 
        e.preventDefault();
        $('#atras').hide();
        $('#adelante2').hide();;
        $('#caja1_t').fadeIn(2000);
        $('#adelante').show();
        $('#caja2_t').fadeOut(2000);
    });
});

$(document).ready(function () {
    $("#adelante2").click(function (e) { 
        e.preventDefault();
        $('#atras').hide();
        $('#adelante2').hide();    
        $('#caja2_t').fadeOut(2000);
        $('#atras2').show();
        $('#adelante3').show();
        $('#caja3_t').fadeIn(2000);
    });
});

$(document).ready(function () {
    $("#atras2").click(function (e) { 
        e.preventDefault();
        $('#caja3_t').fadeOut(2000);
        $('#caja2_t').fadeIn(2000);
        $('#adelante3').hide();
        $('#atras').show();
        $('#atras2').hide();
        $('#adelante2').show();  
    });
});

$(document).ready(function () {
    $("#adelante3").click(function (e) { 
        e.preventDefault();
        $('#atras2').hide();
        $('#adelante3').hide();    
        $('#caja3_t').fadeOut(2000);
        $('#atras3').show();
        $('#adelante4').show();
        $('#caja4_t').fadeIn(2000);
    });
});

$(document).ready(function () {
    $("#atras3").click(function (e) { 
        e.preventDefault();
        $('#caja4_t').fadeOut(2000);
        $('#caja3_t').fadeIn(2000);
        $('#adelante4').hide();
        $('#atras2').show();
        $('#atras3').hide();
        $('#adelante3').show();  
    });
});

$(document).ready(function () {
    $("#adelante4").click(function (e) { 
        e.preventDefault();
        $('#atras3').hide();
        $('#adelante4').hide();    
        $('#caja4_t').fadeOut(2000);
        $('#atras4').show();
        $('#caja5_t').fadeIn(2000);
    });
});
$(document).ready(function () {
    $("#atras4").click(function (e) { 
        e.preventDefault();
        $('#adelante4').hide();    
        $('#caja5_t').fadeOut(2000);
        $('#atras3').show();
        $('#atras4').hide();
        $('#caja4_t').fadeIn(2000);
        $('#adelante4').show();  
    });
});