/*
METODO PARA REGISTRAR EMPLEADO
*/
$(document).ready(function () {
  $("#FormRegistrarEmpleado").validate({
    rules: {
      apellidoEmpleado: { required: true },
      nombreEmpleado: { required: true },
      documentoEmpleado: { required: true, number: true },
      fenacEmpleado: { required: true, date: true },
      telEmpleado: { required: true, number: true },
      dirEmpleado: { required: true },
      correoEmpleado: { required: true, email: true },
      fechaingEmpleado: { required: true, date: true },
      sucursalEmpleado: { required: true },
      rolEmpleado: { required: true },
    },
    messages: {
      apellidoEmpleado: { required: "Debe de completar los campos." },
      nombreEmpleado: { required: "Debe de completar los campos." },
      documentoEmpleado: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      fenacEmpleado: {
        required: "Debe de completar los campos.",
        date: "Selecciona una fecha correcta",
      },
      telEmpleado: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      dirEmpleado: { required: "Debe de completar los campos." },
      correoEmpleado: {
        required: "Debe de completar los campos.",
        email: "Solo se aceptan Correos!",
      },
      fechaingEmpleado: {
        required: "Debe de completar los campos.",
        date: "Selecciona una fecha correcta",
      },
      sucursalEmpleado: { required: "Debe de completar los campos." },
      rolEmpleado: { required: "Debe de completar los campos." },
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
        apellidoEmpleado: $("#apellidoEmpleado").val(),
        nombreEmpleado: $("#nombreEmpleado").val(),
        documentoEmpleado: $("#documentoEmpleado").val(),
        fenacEmpleado: $("#fenacEmpleado").val(),
        telEmpleado: $("#telEmpleado").val(),
        dirEmpleado: $("#dirEmpleado").val(),
        correoEmpleado: $("#correoEmpleado").val(),
        fechaingEmpleado: $("#fechaingEmpleado").val(),
        sucursalEmpleado: $("#sucursalEmpleado").val(),
        rolEmpleado: $("#rolEmpleado").val(),
      };
      $.ajax({
        url: "model/registrarEmpleado.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se registro correctamente el rol.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            
            respuestaError("Error!", "Ocurrio un error al registrar el rol.");
          }
        },
      });
    },
  });

  /*
  METODO PARA REGISTRAR IMAGEN EMPLEADO
  */

  $("#FormRegistrarEmpleado").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData(this);
    if (document.getElementById("fotoEmpleado").files.length == 0) {
      Swal.fire({
        icon: "error",
        title: "¡Ups!",
        text: "No se ha cargado ningún archivo",
      });
    } else {
      $.ajax({
        url: "model/registrarEmpleado.php",
        data: datos,
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha subido registrado correctamente el empleado."
            );
            setTimeout(function () {
              window.location.href = "Ver-categoria";
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "Error!",
              "Ocurrio un error al registrar al empleado."
            );
          } else if (data.respuesta == "noformato") {
            respuestaError(
              "Error!",
              "Debe de elegir una foto con extensión .jpg, .jpeg, .png."
            );
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 4MB.");
          } else if (data.respuesta == "vacio") {
            respuestaError("Error!", "Debe de completar los campos.");
          }
        },
      });
    }
  });
});

/*
METODO PARA REGISTRAR CLIENTE
*/
$(document).ready(function () {
  $("#FormRegistrarCliente").validate({
    rules: {
      nombreCliente: { required: true },
      apellidoCliente: { required: true },
      tipodocCliente: { required: true, number: true },
      documentoCliente: { required: true, number: true },
      telCliente: { required: true, number: true },
      sexoCliente: { required: true, number: true },
      correoCliente: { required: true, email: true },
      fenacCliente: { required: true, date: true },
      fechaingCliente: { required: true, date: true },
      dirCliente: { required: true },
      ciudadCliente: { required: true, number: true },
    },
    messages: {
      nombreCliente: { required: "Debe de completar los campos." },
      apellidoCliente: { required: "Debe de completar los campos." },
      tipodocCliente: {
        required: "Debe de completar los campos.",
        number: "Selecciona uno",
      },
      documentoCliente: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      telCliente: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      sexoCliente: {
        required: "Debe de completar los campos.",
        number: "Selecciona uno",
      },
      correoCliente: {
        required: "Debe de completar los campos.",
        email: "Solo se aceptan Correos!",
      },
      fenacCliente: {
        required: "Debe de completar los campos.",
        date: "Selecciona una fecha correcta",
      },
      fechaingCliente: {
        required: "Debe de completar los campos.",
        date: "Selecciona una fecha correcta",
      },
      dirCliente: {
        required: "Debe de completar los campos.",
      },
      ciudadCliente: {
        required: "Debe de completar los campos.",
        number: "Selecciona uno",
      },
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
        nombreCliente: $("#nombreCliente").val(),
        apellidoCliente: $("#apellidoCliente").val(),
        tipodocCliente: $("#tipodocCliente").val(),
        documentoCliente: $("#documentoCliente").val(),
        telCliente: $("#telCliente").val(),
        sexoCliente: $("#sexoCliente").val(),
        correoCliente: $("#correoCliente").val(),
        fenacCliente: $("#fenacCliente").val(),
        fechaingCliente: $("#fechaingCliente").val(),
        dirCliente: $("#dirCliente").val(),
        ciudadCliente: $("#ciudadCliente").val(),
      };
      $.ajax({
        url: "model/registrarCliente.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se registro correctamente el cliente.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error al registrar el cliente.");
          }
        },
      });
    },
  });
});

/*
METODO PARA REGISTRAR PRODUCTO
*/
$(document).ready(function () {
  $("#FormRegistrarProducto").validate({
    rules: {
      codigoProd: { required: true },
      nombreProducto: { required: true },
      descripcionProducto: { required: true },
      precioProducto: { required: true, number: true },
      stock: { required: true, number: true },
      marcaProducto: { required: true },
      categoriaProducto: { required: true, number: true },
      fechaProducto: { required: true, date: true },
    },
    messages: {
      codigoProd: {
        required: "Debe de completar los campos.",
      },
      nombreProducto: { required: "Debe de completar los campos." },
      descripcionProducto: { required: "Debe de completar los campos." },
      precioProducto: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      stock: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      marcaProducto: { required: "Debe de completar los campos." },
      categoriaProducto: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      fechaProducto: {
        required: "Debe de completar los campos.",
        date: "Selecciona una fecha correcta",
      },
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
        codigoProd: $("#codigoProd").val(),
        nombreProducto: $("#nombreProducto").val(),
        descripcionProducto: $("#descripcionProducto").val(),
        precioProducto: $("#precioProducto").val(),
        stock: $("#stock").val(),
        marcaProducto: $("#marcaProducto").val(),
        categoriaProducto: $("#categoriaProducto").val(),
        fechaProducto: $("#fechaProducto").val(),
      };
      $.ajax({
        url: "model/registrarProducto.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          console.log(data);
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se registro correctamente el rol.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error al registrar el rol.");
          }
        },
      });
    },
  });

  /*
  METODO PARA REGISTRAR IMAGEN PRODUCTO
  */
  $("#FormRegistrarProducto").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData(this);
    if (document.getElementById("fotoProducto").files.length == 0) {
      Swal.fire({
        icon: "error",
        title: "¡Ups!",
        text: "No se ha cargado ningún archivo",
      });
    } else {
      $.ajax({
        url: "model/registrarProducto.php",
        data: datos,
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha subido registrado correctamente el producto."
            );
            setTimeout(function () {
              window.location.href = "Ver-categoria";
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "Error!",
              "Ocurrio un error al registrar el producto."
            );
          } else if (data.respuesta == "noformato") {
            respuestaError(
              "Error!",
              "Debe de elegir una foto con extensión .jpg, .jpeg, .png."
            );
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 4MB.");
          } else if (data.respuesta == "vacio") {
            respuestaError("Error!", "Debe de completar los campos.");
          }
        },
      });
    }
  });
});
/*
METODO PARA REGISTRAR CATEGORIAS
*/
$(document).ready(function () {
  $("#FormRegistrarCategoria").on("submit", function (e) {
    e.preventDefault();
    var datos = new FormData(this);
    if (document.getElementById("fotoCategoria").files.length == 0) {
      Swal.fire({
        icon: "error",
        title: "¡Ups!",
        text: "No se ha cargado ningún archivo",
      });
    } else {
      $.ajax({
        url: "model/registrarCategoria.php",
        data: datos,
        type: "POST",
        dataType: "json",
        contentType: false,
        processData: false,
        async: true,
        cache: false,
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso(
              "¡Exito!",
              "Se ha subido registrado correctamente la categoria."
            );
            setTimeout(function () {
              window.location.href = "Ver-categoria";
            }, 1000);
          } else if (data.respuesta == "error") {
            respuestaError(
              "Error!",
              "Ocurrio un error al registrar la categoria."
            );
          } else if (data.respuesta == "noformato") {
            respuestaError(
              "Error!",
              "Debe de elegir una foto con extensión .jpg, .jpeg, .png."
            );
          } else if (data.respuesta == "notamano") {
            respuestaError("Error!", "Debe de elegir un tamaño menor a 4MB.");
          } else if (data.respuesta == "vacio") {
            respuestaError("Error!", "Debe de completar los campos.");
          }
        },
      });
    }
  });
});

/*
METODO PARA REGISTRAR COMPRA
*/
$(document).ready(function () {
  $("#FormRegistrarCompra").validate({
    rules: {
      Empleado: { required: true, number: true },
      Cliente: { required: true, number: true },
      ModoPago: { required: true, number: true },
      Producto: { required: true, number: true },
      Cantidad: { required: true, number: true },
      Precio: { required: true, number: true },
      totalPago: { required: true, number: true },
      
    },
    messages: {
      Empleado: { required: "Debe de completar los campos." },
      Cliente: { required: "Debe de completar los campos." },
      Cliente: { required: "Debe de completar los campos." },
      ModoPago: {
        required: "Debe de completar los campos.",
        number: "Selecciona uno",
      },
      Cantidad: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      Precio: {
        required: "Debe de completar los campos.",
        number: "Solo se aceptan numeros!",
      },
      totalPago: {
        required: "Debe de completar los campos.",
        number: "Selecciona uno",
      },
     
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
        Empleado: $("#Empleado").val(),
        Cliente: $("#Cliente").val(),
        ModoPago: $("#ModoPago").val(),
        Producto: $("#Producto").val(),
        Cantidad: $("#Cantidad").val(),
        Precio: $("#Precio").val(),
        totalPago: $("#totalPago").val(),
        
      };
      $.ajax({
        url: "model/registrarCompra.php",
        method: "post",
        data: datos,
        dataType: "json",
        type: "POST",
        beforeSend: function () {
          respuestaInfoEspera("Registrando... ¡Espere por favor!");
        },
        success: function (data) {
          if (data.respuesta == "exito") {
            ingresoExitoso("Exito!", "Se registro correctamente la compra.");
            setTimeout(function () {
              location.reload();
            }, 1000);
          } else {
            respuestaError("Error!", "Ocurrio un error al registrar la compra.");
          }
        },
      });
    },
  });
});
