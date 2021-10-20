<?php
session_start();
if(isset($_SESSION['rol'])){ //isset = Tener datos adentro
    header('Location: dashboard');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de sesión</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="view/presentacion/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="view/presentacion/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="view/presentacion/dist/css/adminlte.min.css">
    <!-- Sweet alert2 -->
    <link rel="stylesheet" href="view/presentacion/dist/css/sweetalert2.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="#" class="h1">||<b>COMPUTECK</b>||</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Ingresa para iniciar sesión</p>

                <form id="FormLogin" name="FormLogin" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" id="ingresarCorreo" name="ingresarCorreo" placeholder="Correo">
                        
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" id="ingresarContrasena" name="ingresarContrasena" placeholder="Contrase&ntilde;a">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="ingresarTipo" name="ingresarTipo">
                            <?php
                            $query = $conexion->query("SELECT * FROM `rol` ORDER BY `rol`.`descripcion` ASC");
                            while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-3"> </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesi&oacute;n </button>
                        </div>
                        <div class="col-3"> </div>
                        <!-- /.col -->
                    </div>
                </form>                              
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="view/presentacion/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="view/presentacion/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="view/presentacion/dist/js/adminlte.min.js"></script>
    <!-- Sweet alert2-->
    <script src="view/presentacion/dist/js/alertas.js"></script>
    <script src="view/presentacion/dist/js/sweetalert2.min.js"></script>
    <!-- Jquery Validation -->
    <script src="view/presentacion/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="view/presentacion/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- Login JS-->
    <script src="view/presentacion/dist/js/login.js"></script>

</body>

</html>