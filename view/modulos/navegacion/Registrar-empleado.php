<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar empleado</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar empleado</li>
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
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registrar empleado</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="FormRegistrarEmpleado" name="FormRegistrarEmpleado" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidoEmpleado" name="apellidoEmpleado" placeholder="Apellidos">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombreEmpleado" name="nombreEmpleado" placeholder="Nombres">
                                </div>
                                <div class="form-group">
                                    <label for="doc">Documento</label>
                                    <input type="number" class="form-control" id="documentoEmpleado" name="documentoEmpleado" placeholder="Documento">
                                </div>
                                <div class="form-group">
                                    <label for="fecha de nacimiento">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="fenacEmpleado" name="fenacEmpleado" placeholder="Fecha de nacimiento">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telefono</label>
                                    <input type="number" class="form-control" id="telEmpleado" name="telEmpleado" placeholder="Telefono">
                                </div>
                                <div class="form-group">
                                    <label for="dir    de nacimiento">Direcci&oacute;n</label>
                                    <input type="text" class="form-control" id="dirEmpleado" name="dirEmpleado" placeholder="Direcci&oacute;n">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo</label>
                                    <input type="mail" class="form-control" id="correoEmpleado" name="correoEmpleado" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <label for="fecha de nacimiento">Fecha de ingreso</label>
                                    <input type="date" class="form-control" id="fechaingEmpleado" name="fechaingEmpleado" placeholder="Fecha de ingreso">
                                </div>
                                <div class="form-group">
                                    <label>Sucursal</label>
                                    <select class="custom-select" id="sucursalEmpleado" name="sucursalEmpleado">
                                        <?php
                                        $query = $conexion->query("SELECT sucursal.id_sucursal, sucursal.desc_sucursal, ciudad.desc_ciudad FROM sucursal INNER JOIN ciudad ON sucursal.id_ciudad = ciudad.id_ciudad");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_sucursal'] . '">' . utf8_encode($valores['desc_ciudad']) . " - " . utf8_encode($valores['desc_sucursal']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Rol</label>
                                    <select class="custom-select" id="rolEmpleado" name="rolEmpleado">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM rol");
                                        while ($valores = mysqli_fetch_array($query)) {

                                            if ($valores['id'] != 3) {
                                                echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Imagen</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="fotoEmpleado" name="fotoEmpleado">
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