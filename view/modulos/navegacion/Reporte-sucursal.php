<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Reporte</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Reporte Sucursal</li>
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
                            <h3 class="card-title">Reporte Sucursal</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="FormReporteSucursal" name="FormReporteSucursal" method="POST">
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Sucursal </label>
                                    <select class="custom-select" id="sucursalEmpleado" name="sucursalEmpleado">
                                        <?php
                                        $query = $conexion->query("SELECT * FROM sucursal ORDER BY `desc_sucursal` ASC");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['id_sucursal'] . '">' . utf8_encode($valores['id_sucursal']) . " - " . utf8_encode($valores['desc_sucursal']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <a href="model/Reporte-Clientes.php" target="_blank">
                                    <button type="button" class="btn btn-primary">Generar</button>
                                </a>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>


    </section>
</div>