/**
 * Created by YvonneQM on 02-03-16.
 */


$(document).ready(function () {

    var $form = $('#login-form'),
        $showLogin = $('#show-login');

    function showForm() {
        $form.slideToggle();
        return false;
    }
    $showLogin.click(showForm);

    $('.rut').Rut({
        on_error : function () {
            swal("Error!",
                "Rut Inválido",
                "warning");
        },
        format_on: 'keyup'
    });

});




