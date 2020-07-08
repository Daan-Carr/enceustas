function mostrarPassword() {
    var cambio = document.getElementById("password");
    var cambio2 = document.getElementById("password2");
    if (cambio.type == "password") {
        cambio.type = "text";
        cambio2.type = "text";
    } else {
        cambio.type = "password";
        cambio2.type = "password";
    }
}

$(document).ready(function() {
    //CheckBox mostrar contraseña
    $('#mostrar_contrasena').click(function() {
        $('#password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        $('#password2').attr('type', $(this).is(':checked') ? 'text' : 'password');
    });
});