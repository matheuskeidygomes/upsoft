var $doc = $('html, body');
$('.scroll').click(function () {
    $doc.animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
    return false;
});

$(document).ready(function () {

    $('#scrollup').click(function () {

        $('html, body').animate({ scrollTop: 0 }, 'slow');

    });
});

function validaForm() {
    erro = false;
    if ($('#nome').val() == '') {
        alert('You need to enter the name'); erro = true;
    }
    if ($('#email').val() == '' && !erro) {
        alert('You need to enter the e-mail'); erro = true;
    }
    if ($('#mensagem').val() == '' && !erro) {
        alert('You need to enter the message'); erro = true;
    }

    //se nao tiver erros
    if (!erro) {
        $('#formulario').submit();
    }
}