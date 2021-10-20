<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar cliente</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar cliente</li>
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
                            <h3 class="card-title">Registrar cliente</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="FormRegistrarCliente" name="FormRegistrarCliente" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombreCliente" name="nombreCliente" placeholder="Nombres">
                                </div>
                                <div class="form-group">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" class="form-control" id="apellidoCliente" name="apellidoCliente" placeholder="Apellidos">
                                </div>
                                <div class="form-group">
                                    <label>tipo de Documento</label>
                                    <select class="custom-select" id="tipodocCliente" name="tipodocCliente">
                                        <?php
                                        $query = $conexion->query("SELECT tipodoc.id, tipodoc.descripcion FROM tipodoc");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="doc">Documento</label>
                                    <input type="number" class="form-control" id="documentoCliente" name="documentoCliente" placeholder="Documento">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telefono</label>
                                    <input type="number" class="form-control" id="telCliente" name="telCliente" placeholder="Telefono">
                                </div>
                                <div class="form-group">
                                    <label>Sexo</label>
                                    <select class="custom-select" id="sexoCliente" name="sexoCliente">
                                        <?php
                                        $query = $conexion->query("SELECT sexo.id, sexo.descripcion FROM sexo");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id'] . '">' . utf8_encode($valores['descripcion']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Correo</label>
                                    <input type="mail" class="form-control" id="correoCliente" name="correoCliente" placeholder="Correo">
                                </div>
                                <div class="form-group">
                                    <label for="fecha de nacimiento">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" id="fenacCliente" name="fenacCliente" placeholder="Fecha de nacimiento">
                                </div>
                                <div class="form-group">
                                    <label for="fecha de nacimiento">Fecha de ingreso</label>
                                    <input type="date" class="form-control" id="fechaingCliente" name="fechaingCliente" placeholder="Fecha de ingreso">
                                </div>
                                <div class="form-group">
                                    <label for="dir    de nacimiento">Direcci&oacute;n</label>
                                    <input type="text" class="form-control" id="dirCliente" name="dirCliente" placeholder="Direcci&oacute;n">
                                </div>
                                <div class="form-group">
                                    <label>Ciudad</label>
                                    <select class="custom-select" id="ciudadCliente" name="ciudadCliente">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM ciudad ORDER BY `desc_ciudad` ASC");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_ciudad'] . '">' . utf8_encode($valores['desc_ciudad']) . '</option>';
                                        }
                                        ?>
                                    </select>
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