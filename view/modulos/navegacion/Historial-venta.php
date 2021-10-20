<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Historial venta</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Inicio</a></li>
                        <li class="breadcrumb-item active">Historial venta</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Historial de ventas</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id factura</th>
                                <th>Cliente</th>
                                <th>Modopago </th>
                                <th>Fecha Pago</th>
                                <th>Total</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $empleado = $_SESSION['idemp'];

                            $query = $conexion->query("SELECT f.id_fact, f.id_modopago, f.id_cliente, f.fecha_pago, f.total_pagar, m.metodo, c.nom_cliente, c.ape_cliente FROM factura f inner join modopago m on m.id_modopago = f.id_modopago INNER JOIN cliente c on c.id_cliente = f.id_cliente where f.id_emp = $empleado");
                            while ($row = mysqli_fetch_array($query)) {


                                echo "
                                <tr>
                                    <td>" . $row['id_fact'] . "</td>
                                    <td>" . $row['nom_cliente'] . " " . $row['ape_cliente'] . "</td>
                                    <td>" . $row['metodo'] . "</td>
                                    <td>" . $row['fecha_pago'] . "</td>
                                    <td>" . $row['total_pagar'] . "</td>
                                    <td></td>
                                    
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