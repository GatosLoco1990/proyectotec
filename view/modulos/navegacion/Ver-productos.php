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
                        <li class="breadcrumb-item active">Ver productos</li>
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
                    <h3 class="card-title">Lista de productos</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Descripcion</th>
                                <th>Precio</th>
                                <th>Stock</th>
                                <th>Marca</th>
                                <th>Categor&iacute;a</th>
                                <th>imagen</th>
                                <th>Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $query = $conexion->query("SELECT  p.id_producto, p.cod_producto, p.nom_producto, p.desc_producto, p.desc_producto, p.precio,c.desc_categoria, p.stock, p.marca,p.ruta_imagen, p.imagen FROM producto p inner join categoria c on c.id_categoria = p.id_categoria");
                            
                            while ($row = mysqli_fetch_array($query)) {


                                echo "
                                <tr>
                                    <td>" . $row['id_producto'] . "</td>
                                    <td>" . $row['cod_producto'] . "</td>
                                    <td>" . $row['nom_producto'] . "</td>
                                    <td>" . $row['desc_producto'] . "</td>
                                    <td>" . $row['precio'] . "</td>
                                    <td>" . $row['desc_categoria'] . "</td>
                                    <td>" . $row['stock'] . "</td>
                                    <td>" . $row['marca'] . "</td>
                                    <td><img src='model/" . $row['ruta_imagen'] . "' class='img-fluid mb-2' width='100px' height='100px'" . $row['desc_categoria'] ."'/></td>
                                    <td>" . $row['marca'] . "</td>
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