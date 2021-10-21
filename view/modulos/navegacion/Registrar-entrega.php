<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Registrar Entrega</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Registrar Entrega</li>
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
                            <h3 class="card-title">Registrar Entrega</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="FormRegistrarEntrega" name="FormRegistrarEntrega" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fecha de nacimiento">Fecha de ingreso</label>
                                    <input type="date" class="form-control" id="fechaing" name="fechaing" placeholder="Fecha de ingreso">
                                </div>
                                <div class="form-group">
                                    <label for="nombre">Resultado</label>
                                    <input type="text" class="form-control" id="resultado" name="resultado" placeholder="Resultado">
                                </div>

                                <div class="form-group">
                                    <label for="doc">Valor</label>
                                    <input type="number" class="form-control" id="valor" name="valor" placeholder="Valor">
                                </div>

                                <div class="form-group">
                                    <label>Servicio</label>
                                    <select class="custom-select" id="servicio" name="servicio">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM `servicio`");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_servicio'] . '">' . utf8_encode($valores['id_servicio']) ." - ".utf8_encode($valores['descripcion']). '</option>';
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