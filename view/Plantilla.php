<?php
if (isset($_GET["ubicacion"])) {
    if ($_GET["ubicacion"] == "Inicio") {
        include "model/conexion.php";
        include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
    } else if (
        $_GET["ubicacion"] == "dashboard" || $_GET["ubicacion"] == "Ver-categoria" ||
        $_GET["ubicacion"] == "Registrar-categoria" || $_GET["ubicacion"] == "Registrar-venta" ||
        $_GET["ubicacion"] == "Historial-venta" || $_GET["ubicacion"] == "faq" || $_GET["ubicacion"] == "Contactanos" ||
        $_GET["ubicacion"] == "Ver-categoria-cliente" || $_GET["ubicacion"] == "Historial-compra" || $_GET["ubicacion"] == "Quienes" ||
        $_GET["ubicacion"] == "Perfil" || $_GET["ubicacion"] == "Registrar-empleado" || $_GET["ubicacion"] == "Registrar-cliente" ||
        $_GET["ubicacion"] == "producto" || $_GET["ubicacion"] == "Registrar-producto" || $_GET["ubicacion"] == "Categoria" || $_GET["ubicacion"] == "Ver-categoria-administrador"
        || $_GET["ubicacion"] == "certificado"
        || $_GET["ubicacion"] == "Salir" || $_GET["ubicacion"] == "Reporte-sucursal" || $_GET["ubicacion"] == "Ver-empleados" || $_GET["ubicacion"] == "Ver-clientes"
        || $_GET["ubicacion"] == "Ver-productos" || $_GET["ubicacion"] == "Reporte-compras" || $_GET["ubicacion"] == "Ver-servicios" 
        || $_GET["ubicacion"] == "Registrar-servicios" || $_GET["ubicacion"] == "Registrar-entrega" || $_GET["ubicacion"] == "registrarEntrega"
        || $_GET["ubicacion"] == "Ver-entrega"
    ) { ?>
        <!DOCTYPE html>
        <html lang="es">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>COMPUTECK</title>

            <!-- Google Font: Source Sans Pro -->
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="view/presentacion/plugins/fontawesome-free/css/all.min.css">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bootstrap 4 -->
            <link rel="stylesheet" href="view/presentacion/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
            <!-- iCheck -->
            <link rel="stylesheet" href="view/presentacion/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
            <!-- JQVMap -->
            <link rel="stylesheet" href="view/presentacion/plugins/jqvmap/jqvmap.min.css">
            <!-- Theme style -->
            <link rel="stylesheet" href="view/presentacion/dist/css/adminlte.min.css">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="view/presentacion/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
            <!-- Daterange picker -->
            <link rel="stylesheet" href="view/presentacion/plugins/daterangepicker/daterangepicker.css">
            <!-- summernote -->
            <link rel="stylesheet" href="view/presentacion/plugins/summernote/summernote-bs4.min.css">
            <!-- DataTables -->
            <link rel="stylesheet" href="view/presentacion/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
            <link rel="stylesheet" href="view/presentacion/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
            <link rel="stylesheet" href="view/presentacion/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
            <!-- Hover -->
            <link rel="stylesheet" href="view/presentacion/dist/css/hover.css">
            <!-- Sweet alert2 -->
            <link rel="stylesheet" href="view/presentacion/dist/css/sweetalert2.min.css">

        </head>

        <body class="hold-transition sidebar-mini layout-fixed">
            <div class="wrapper">
                <?php

                include "model/conexion.php";
                session_start();
                include "modulos/header.php";
                include "modulos/menu.php";
                if (empty($_SESSION['rol'])) {
                    header("Location: Inicio");
                }
                include "modulos/navegacion/" . $_GET["ubicacion"] . ".php";
                include "modulos/footer.php";

                ?>
            </div>

            <!-- jQuery -->
            <script src="view/presentacion/plugins/jquery/jquery.min.js"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="view/presentacion/plugins/jquery-ui/jquery-ui.min.js"></script>
            <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
            <script>
                $.widget.bridge('uibutton', $.ui.button)
            </script>
            <!-- Bootstrap 4 -->
            <script src="view/presentacion/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- ChartJS -->
            <script src="view/presentacion/plugins/chart.js/Chart.min.js"></script>
            <!-- Sparkline -->
            <script src="view/presentacion/plugins/sparklines/sparkline.js"></script>
            <!-- JQVMap -->
            <script src="view/presentacion/plugins/jqvmap/jquery.vmap.min.js"></script>
            <script src="view/presentacion/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
            <!-- jQuery Knob Chart -->
            <script src="view/presentacion/plugins/jquery-knob/jquery.knob.min.js"></script>
            <!-- daterangepicker -->
            <script src="view/presentacion/plugins/moment/moment.min.js"></script>
            <script src="view/presentacion/plugins/daterangepicker/daterangepicker.js"></script>
            <!-- Tempusdominus Bootstrap 4 -->
            <script src="view/presentacion/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
            <!-- Summernote -->
            <script src="view/presentacion/plugins/summernote/summernote-bs4.min.js"></script>
            <!-- overlayScrollbars -->
            <script src="view/presentacion/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
            <!-- AdminLTE App -->
            <script src="view/presentacion/dist/js/adminlte.js"></script>
            <!-- AdminLTE for demo purposes -->
            <script src="view/presentacion/dist/js/demo.js"></script>
            <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
            <script src="view/presentacion/dist/js/pages/dashboard.js"></script>
            <!-- bs-custom-file-input -->
            <script src="view/presentacion/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
            <!-- DataTables  & Plugins -->
            <script src="view/presentacion/plugins/datatables/jquery.dataTables.min.js"></script>
            <script src="view/presentacion/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
            <script src="view/presentacion/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
            <script src="view/presentacion/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
            <script src="view/presentacion/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
            <script src="view/presentacion/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
            <script src="view/presentacion/plugins/jszip/jszip.min.js"></script>
            <script src="view/presentacion/plugins/pdfmake/pdfmake.min.js"></script>
            <script src="view/presentacion/plugins/pdfmake/vfs_fonts.js"></script>
            <script src="view/presentacion/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
            <script src="view/presentacion/plugins/datatables-buttons/js/buttons.print.min.js"></script>
            <script src="view/presentacion/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
            <!-- Filterizr-->
            <script src="view/presentacion/plugins/filterizr/jquery.filterizr.min.js"></script>
            <!-- Sweet alert2-->
            <script src="view/presentacion/dist/js/alertas.js"></script>
            <script src="view/presentacion/dist/js/sweetalert2.min.js"></script>
            <!-- Jquery Validation -->
            <script src="view/presentacion/plugins/jquery-validation/jquery.validate.min.js"></script>
            <script src="view/presentacion/plugins/jquery-validation/additional-methods.min.js"></script>

            <!-- Registrar JS-->
            <script src="view/presentacion/dist/js/registrar.js"></script>
            <script src="view/presentacion/dist/js/ver.js"></script>
            <!-- Page specific script agregar archivo-->
            <script>
                $(function() {
                    bsCustomFileInput.init();
                });
            </script>
            <!-- Page specific script historial ventas y compras-->
            <script>
                $(function() {
                    $("#example1").DataTable({
                        "responsive": true,
                        "lengthChange": false,
                        "autoWidth": false,
                        "buttons": ["excel", "pdf", "print"]
                    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    $('#example2').DataTable({
                        "paging": true,
                        "lengthChange": false,
                        "searching": false,
                        "ordering": true,
                        "info": true,
                        "autoWidth": false,
                        "responsive": true,
                    });
                });
            </script>
            <!-- Page specific script categorias-->
            <script>
                $(function() {
                    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                        event.preventDefault();
                        $(this).ekkoLightbox({
                            alwaysShowClose: true
                        });
                    });

                    $('.filter-container').filterizr({
                        gutterPixels: 3
                    });
                    $('.btn[data-filter]').on('click', function() {
                        $('.btn[data-filter]').removeClass('active');
                        $(this).addClass('active');
                    });
                })
            </script>
        </body>

<?php

    } else if ($_GET["ubicacion"] == "Inicio") {
        header('location: Inicio');
    }
} else {
    header('location: Inicio');
}
?>