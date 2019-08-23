$(document).ready(function () {

    $('#carro').draggable();

    $('#pelota').click(function () {
        /*$('#pelota').effect('bounce', {
            times: 3
        }, 500);
        */

        $('#pelota').click(function () {
            $('#pelota').effect('slide');

        });
    });

    $('#derecha').click(function () {
        $('#b').animate({
            left: '+=100px'
        }, 100);
    });

    $('#menu').accordion();

    $('ol').sortable();


});
