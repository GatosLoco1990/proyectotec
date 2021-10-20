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
                                <th>Nombres y apellidos</th>
                                <th>Documento</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Sucursal</th>
                                <th>Ciudad</th>
                                <th>Imagen</th>
                                <th>Rol</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query = $conexion->query("SELECT e.id_emp, e.nom_emp,e.ruta_imagen, e.ape_emp, e.doc_emp, e.telefono_emp, e.mail_emp,e.imagen, s.desc_sucursal, c.desc_ciudad, r.descripcion FROM empleado e INNER JOIN sucursal s ON s.id_sucursal = e.id_sucursal INNER JOIN ciudad c ON c.id_ciudad = s.id_ciudad INNER JOIN rol r on r.id = e.rol");
                            while ($row = mysqli_fetch_array($query)) {

                                if ($row['id_emp'] != 10) {

                                    echo "
                                    <tr>
                                        <td>" . $row['id_emp'] . "</td>
                                        <td>" . $row['nom_emp'] . " " . $row['ape_emp'] . "</td>
                                        <td>" . $row['doc_emp'] . "</td>
                                        <td>" . $row['telefono_emp'] . "</td>
                                        <td>" . $row['mail_emp'] . "</td>
                                        <td>" . $row['desc_sucursal'] . "</td>
                                        <td>" . $row['desc_ciudad'] . "</td>
                                        <td><img src='model/".$row['ruta_imagen']."' width='100' height='100' /> </td>
                                        <td>" . $row['descripcion'] . "</td>
                                    </tr>";
                                }
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