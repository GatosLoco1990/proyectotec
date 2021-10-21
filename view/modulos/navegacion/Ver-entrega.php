<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Listado</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Ver entregas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de entregas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Fecha</th>
                                <th>Resultado</th>
                                <th>Costo</th>
                                <th>Servicio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query = $conexion->query("SELECT e.id_entrega, e.fecha_entrega, e.resultado, e.costo_neto, s.id_servicio, s.descripcion FROM entrega e INNER JOIN servicio s on s.id_servicio = e.id_servicio");

                            while ($row = mysqli_fetch_array($query)) {

                                echo "
                                <tr>
                                    <td>" . $row['id_entrega'] . "</td>
                                    <td>" . $row['fecha_entrega'] . "</td>
                                    <td>" . $row['resultado'] . "</td>
                                    <td>" . $row['costo_neto'] . "</td>
                                    <td>" . $row['id_servicio'] . " - ".$row['descripcion']."</td>
                                    
                                </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>