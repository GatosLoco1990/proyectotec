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
                        <li class="breadcrumb-item active">Ver empleados</li>
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
                    <h3 class="card-title">Lista de empleados</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Descripcion</th>
                                <th>Empleado</th>
                                <th>Cliente</th>
                                <th>Tipo de servicio </th>
                                <th>fecha</th>
                                <th>estado</th>
                                <th>Imagen</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query = $conexion->query("SELECT s.id_servicio, s.descripcion, e.nom_emp, e.ape_emp,c.nom_cliente,c.ape_cliente,ti.ti_descripcion, s.fecha, s.estado, s.ruta_imagen FROM servicio s INNER JOIN empleado e on s.id_empleado = e.id_emp INNER JOIN cliente c on c.id_cliente = s.id_cliente INNER JOIN tipo_servicio ti on ti.id_tservicio = s.id_tservicio");
                            while ($row = mysqli_fetch_array($query)) {

                                echo "
                                    <tr>
                                        <td>" . $row['id_servicio'] . "</td>
                                        <td>" . $row['descripcion'] . "</td>
                                        <td>" . $row['nom_emp'] . " " . $row['ape_emp'] . "</td>
                                        <td>" . $row['nom_cliente'] . " " . $row['ape_cliente'] . "</td>                                        
                                        <td>" . $row['ti_descripcion'] . "</td>
                                        <td>" . $row['fecha'] . "</td>
                                        <td>" . $row['estado'] . "</td>                                        
                                        <td><img src='model/" . $row['ruta_imagen'] . "' width='100' height='100' /> </td>            
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