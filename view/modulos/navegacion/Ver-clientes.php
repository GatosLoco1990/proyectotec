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
                        <li class="breadcrumb-item active">Ver clientes</li>
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
                    <h3 class="card-title">Lista de clientes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombres y apellidos</th>
                                <th>Tipo documento</th>
                                <th>Documento</th>
                                <th>Sexo</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>Ciudad</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query = $conexion->query("SELECT cl.id_cliente, cl.sexo_cliente , cl.nom_cliente, cl.ape_cliente, cl.doc_cliente, cl.tel_cliente, cl.correo_cliente,s.descripcion,t.descripcion, c.desc_ciudad  from cliente cl INNER JOIN tipodoc t on t.id = cl.tipodoc INNER JOIN sexo s on s.id = cl.sexo_cliente INNER JOIN ciudad c on c.id_ciudad  = cl.id_ciudad  ");
                            while ($row = mysqli_fetch_array($query)) {

                                
                                echo "
                                <tr>
                                    <td>" . $row['id_cliente'] . "</td>
                                    <td>" . $row['nom_cliente'] . " " . $row['ape_cliente'] . "</td>
                                    <td>" . $row['descripcion'] . "</td>
                                    <td>" . $row['doc_cliente'] . "</td>
                                    <td>" . $row['sexo_cliente'] . "</td>
                                    <td>" . $row['tel_cliente'] . "</td>
                                    <td>" . $row['correo_cliente'] . "</td>
                                    <td>" . $row['desc_ciudad'] . "</td>
                                    <td><a href='model/borrar.php?id_cliente='". $row['id_cliente']."'>Eliminar</a></td>                            
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