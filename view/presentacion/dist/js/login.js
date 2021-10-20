$(document).ready(function () {
  $("#FormLogin").validate({
    rules: {
      ingresarCorreo: { required: true, email: true },
      ingresarContrasena: { required: true },
    },
    messages: {
      ingresarCorreo: {
        required: "Debe de completar los campos.",
        email: "Solo se aceptan correos.",
      },
      ingresarContrasena: { required: "Debe de completar los campos." },
    },
    errorElement: "span",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      element.closest(".form-group").append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass("is-invalid");
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass("is-invalid");
    },
    submitHandler: function () {
      var datos = {
        ingresarCorreo: $("#ingresarCorreo").val(),
        ingresarContrasena: $("#ingresarContrasena").val(),
        ingresarTipo: $("#ingresarTipo").val(),
      };
      $.ajax({
        url: "model/login.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          console.log(data)
          if (data.respuesta == "exito") {
            ingresoExitoso("¡Inicio Sesión!", "Bienvenido(a) a Olimpica RGV");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "¡Error!",
              "Usuario, contraseña y/ o rol incorrectos"
            );
          }
        },
      });
    },
  });
});
