<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Certificado</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Certificado empleado</li>
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
                            <h3 class="card-title">Certificado empleado</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="FormRegistrarEmpleado" name="FormRegistrarEmpleado" method="POST">
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label>Empleado </label>
                                    <select class="custom-select" id="sucursalEmpleado" name="sucursalEmpleado">
                                        <?php
                                        $query = $conexion->query("SELECT doc_emp, nom_emp, ape_emp FROM empleado");
                                        while ($valores = mysqli_fetch_array($query)) {
                                            echo '<option value="' . $valores['doc_emp'] . '">' . utf8_encode($valores['doc_emp']) . " - " . utf8_encode($valores['nom_emp']). " " . utf8_encode($valores['ape_emp']) . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                               
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Generar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>


    </section>
</div>