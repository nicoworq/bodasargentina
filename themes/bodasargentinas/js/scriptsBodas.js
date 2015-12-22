/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



jQuery(document).ready(function ($) {

    $('.home-slides').flexslider();


    /*
     * Selector provincia fotografos
     */

    $('.selector-provincia').change(function () {
        var url = $('.selector-provincia option:selected').attr('data-url');
        if (url !== '') {
            window.location.href = url;
        }
    });


    $('input,textarea').keydown(function () {
        $(this).removeClass('input-error');
    });


    /*
     * CREAR TIP
     */

    $('#form-presupuesto').submit(function () {

        event.preventDefault();

        var formOK = true;

        var form = $(this);

        form.find('input[type=text] , textarea').not('input[name=sex]').each(function () {
            $(this).removeClass('input-error');
            if ($(this).val() === '') {
                formOK = false;
                $(this).addClass('input-error');
            }
        });

        if (!formOK) {
            swal("Oops...", "Debe completar todos los campos", "error");
            return false;
        }

        if (!validateEmail(form.find('input[name=email]').val())) {
            form.find('input[name=email]').addClass('input-error');
            swal("Oops...", "Debe ingresar un Email Valido.", "error");
            return false;
        }

        var url = $(this).attr('action');

        form.find('.ajaxing').fadeIn();

        $.post(url, form.serialize(), function (json) {
            form.find('.ajaxing').fadeOut();
            if (json.enviado) {
                swal("Gracias!", "Se ha enviado tu consulta. Nos comunicaremos a la brevedad", "success", function () {
                    window.location.reload();
                });


            } else {
                swal("Oops...", "Error al enviar tu consulta!", "error");

            }
        });

    });


    /*
     * DATEPICKER PRESUPUESTO
     */

    $('#form-presupuesto input[name=fecha_evento]').datepicker({
        format: "dd/mm/yyyy",
        language: "es"
    });


});


function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}