<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Perfil</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                            <li class="breadcrumb-item active">Perfil</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Widget: user widget style 1 -->
                        <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header text-white" style="background: url('view/presentacion/dist/img/Profile-background2.jpg') center center;">
                                <h3 class="widget-user-username text-right"></h3>
                            </div>
                            <div class="widget-user-image">
                                <?php
                                if ($_SESSION['rol'] == 1 || ($_SESSION['rol'] == 2)) {
                                    echo "<img class='img-circle' src='model/" . $_SESSION['imagen'] . "' height='1500px' alt='User Avatar'>";
                                } else {
                                    echo "<img class='img-circle' src='view/presentacion/dist/img/AdminLTELogo.png  ' height='1500px' alt='User Avatar'>";
                                }

                                ?>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Datos de cuenta</h3>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Correo</label>
                                                        <?php
                                                        echo "<input type='text' class='form-control' placeholder='" . $_SESSION['correo'] . "' disabled>"
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Documento</label>
                                                        <input type="text" class="form-control" placeholder="Documento" disabled>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <!-- /.card-body -->
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <!-- /.row -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card-body">
                                            <div class="card card-primary">
                                                <div class="card-header">
                                                    <h3 class="card-title">Datos personales</h3>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Nombres y apellidos</label>
                                                        <?php
                                                        echo "<input type='text' class='form-control' placeholder='" . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . "' disabled>"
                                                        ?>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Tel&eacute;fono</label>
                                                        <?php
                                                        echo "<input type='text' class='form-control' placeholder='" . $_SESSION['telefono'] . "' disabled>"
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Direcci&oacute;n</label>
                                                        <?php
                                                        echo "<input type='text' class='form-control' placeholder='" . $_SESSION['direccion'] . "' disabled>"
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Ciudad</label>
                                                        <?php
                                                        echo "<input type='text' class='form-control' placeholder='" . $_SESSION['ciudad'] . "' disabled>"
                                                        ?>
                                                    </div>
                                                </div>

                                                <?php

                                                if ($_SESSION['rol'] == 1 || $_SESSION['rol'] == 2) {
                                                    echo "<div class='col-sm-12'>
                                                    <div class='form-group'>
                                                        <label>Sucursal</label>.
                                                        
                                                        <input type='text' class='form-control' placeholder='" . $_SESSION['sucursal'] . "' disabled>
                                                        
                                                    </div>
                                                </div>";
                                                }

                                                ?>


                                            </div>

                                        </div>
                                        <!-- /.card-body -->
                                        <!-- /.col -->
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                        </div>
                        <!-- /.widget-user -->
                    </div>
                    <!-- /.col -->
        </section>



    </div>





</div>