<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar servicios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar servicios</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registrar servicios</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="FormRegistrarServicio" name="FormRegistrarServicio" method="POST" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nombre</label>
                                    <input type="text" class="form-control" id="desc_servicio" name="desc_servicio" placeholder="Ingresa el servicio que vas a realizar">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Empleado</label>
                                    <input value="<?php echo $_SESSION['idemp']; ?>" type="text" class="form-control" id="Empleado" name="Empleado" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Cliente</label>
                                    <select class="custom-select" id="Cliente" name="Cliente">
                                        <?php
                                        $query = $conexion->query("SELECT id_cliente , nom_cliente, ape_cliente FROM cliente");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_cliente'] . '">' . utf8_encode($valores['nom_cliente']) . " " . utf8_encode($valores['ape_cliente']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Tipo de servicio</label>
                                    <select class="custom-select" id="tserv" name="tserv">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM tipo_servicio");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_tservicio'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="fecha de nacimiento">Fecha de ingreso</label>
                                    <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="Fecha de ingreso">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Estado</label>
                                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Ingresa el estado del servicio que harás">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fotoServicio" name="fotoServicio">
                                            <label class="custom-file-label" for="exampleInputFile">Selecciona la imagen</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
</div>