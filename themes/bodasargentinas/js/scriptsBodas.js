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
     * SUSCRIBIR NEWS
     */

    $('#form-suscribir').submit(function (event) {
        event.preventDefault();

        var formOK = true;

        if (!validateEmail($('#form-suscribir input[name=email]').val())) {
            $('#form-suscribir input[name=email]').addClass('input-error');
           
            swal("Oops...", "Debe ingresar un Email Valido.", "error");
            return false;
        }

        var url = $(this).attr('action');

        $('#form-suscribir .ajaxing').fadeIn();

        $.post(url, $('#form-suscribir').serialize(), function (json) {
            $('#form-suscribir .ajaxing').fadeOut();
            if (json.enviado) {
                swal("Gracias!", "Te has suscrito a nuestro newsletter!", "success");
            } else {
                swal("Oops...", "Error al generar tu suscripcion!", "error");
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
    /*
     * File input
     */


    $('.inputfile').each(function () {
        var fileInput = this;
        var $input = $(this),
                $label = $input.next('label'),
                labelVal = $label.html();


        $input.on('change', function (e) {

            $input.removeClass('input-error');
            $label.removeClass('input-error');

            var fileName = '';
            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();
            if (fileName)
                $label.html(fileName);
            else
                $label.html(labelVal);



            if (window.FileReader && fileInput.files) {
                var file = fileInput.files[0];

                var size = parseFloat(file.size / 1024 / 1024).toFixed(2);

                if (size > 0.3) {
                    swal("Oops...", "El tamaño maximo debe ser 300kB ", "error");
                    $input.addClass('input-error');
                    $label.addClass('input-error');
                }

            }

        });
        // Firefox bug fix
        $input.on('focus', function () {
            $input.addClass('has-focus');
        })
                .on('blur', function () {
                    $input.removeClass('has-focus');
                });
    });


    $('#form-subir-imagenes select').change(function () {
        $(this).removeClass('input-error');
    });

    $('#form-subir-imagenes').submit(function (e) {

        var form = $(this);

        var selectOK = true;

        var fileOK = false;
        form.find('input[type=file]').each(function () {
            var file = $(this);
            if (file.val() !== '') {

                var select = file.parent().parent().find('select');
                if (select.val() === '') {
                    select.addClass('input-error');
                    selectOK = false;
                }
                fileOK = true;

                if (file.hasClass('input-error')) {
                    swal("Oops...", "Revisa los tamaños de imagen", "error");
                    e.preventDefault();
                    return false;
                }

            }
        });


        if (!fileOK) {
            swal("Oops...", "Debes cargar al menos una imagen!", "error");
            e.preventDefault();
            return false;
        }
        if (!selectOK) {
            swal("Oops...", "Debes seleccionar la categoria!", "error");
            e.preventDefault();
            return false;
        }


    });

});
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}