/**
 * Created by YvonneQM on 02-03-16.
 */
$(function()
{
    var $form = $('#login-form'),
        $showLogin = $('#show-login');

    function showForm() {
        $form.slideToggle();
        return false;
    }

    $showLogin.click(showForm);
})