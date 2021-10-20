<?php

$producto= $_SESSION['producto'];
$sql = "SELECT * FROM `producto` WHERE id_producto = '$producto'";
$ejecutar = mysqli_query($conexion, $sql);
$row = $ejecutar->fetch_array(MYSQLI_ASSOC);

$nombre = $row['nom_producto'];
$marca = $row['marca'];
$precio = $row['precio'];
$descripcion = $row['desc_producto'];
$imagen = $row['ruta_imagen'];
$fecha = date('m/d/Y h:i:s a', time());
?>


<div class="wrapper">


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">

                            <h3 class="d-inline-block d-sm-none">ss</h3>

                            <div class="col-12">
                                <img src="model/<?php echo $imagen; ?>" class="product-image" alt="Product Image">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3"><?php echo $nombre; ?></h3>
                            <p>Marca: <?php echo $marca; ?></p>


                            <div class="bg-gray py-2 px-3 mt-4">
                                <h2 class="mb-0">
                                    Precio:
                                </h2>
                                <h2 class="mb-0">
                                    <?php
                                    echo $precio
                                    ?>
                                </h2>
                            </div>
                            <?php

                            if ($_SESSION['rol'] != 3) {
                                echo "
                            <div class='mt-4'>
                                
                            <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal-lg'>
                                Comprar
                            </button>

                            </div>";
                            }
                            ?>
                            <div class="modal fade" id="modal-lg">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Compra del producto "<?php echo $nombre; ?>"</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <section class="content">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="card card-primary">
                                                                <div class="card-header">
                                                                    <h3 class="card-title">Registrar Compra</h3>
                                                                </div>
                                                                <!-- /.card-header -->
                                                                <!-- form start -->
                                                                <form id="FormRegistrarCompra" name="FormRegistrarCompra" method="POST">
                                                                    <div class="card-body">
                                                                        <div class="form-group">
                                                                            <label for="nombre">Empleado</label>
                                                                            <input value="<?php echo $_SESSION['idemp'];?>" type="text" class="form-control" id="Empleado" name="Empleado" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="apellido">Cliente</label>
                                                                            <select class="custom-select" id="Cliente" name="Cliente">
                                                                                <?php
                                                                                $query = $conexion->query("SELECT id_cliente , nom_cliente, ape_cliente FROM cliente");
                                                                                while ($valores = mysqli_fetch_array($query)) {
                                                                                    echo '<option value="' . $valores['id_cliente'] . '">' . utf8_encode($valores['nom_cliente']) . " " . utf8_encode($valores['ape_cliente']) . '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="apellido">Modo pago</label>
                                                                            <select class="custom-select" id="ModoPago" name="ModoPago">
                                                                                <?php
                                                                                $query = $conexion->query("SELECT * FROM modopago");
                                                                                while ($valores = mysqli_fetch_array($query)) {
                                                                                    echo '<option value="' . $valores['id_modopago'] . '">' . utf8_encode($valores['metodo']) . '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="nombre">Producto</label>
                                                                            <input value="15" type="number" class="form-control" id="Producto" name="Producto" disabled>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="tel">Cantidad</label>
                                                                            <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="nombre">Precio</label>
                                                                            <input value="<?php echo $precio; ?>" type="number" class="form-control" id="Precio" name="Precio" disabled>
                                                                        </div>

                                                                        <div class="form-group">
                                                                            <label for="nombre">Total a pagar</label>
                                                                            <input value="" type="text" class="form-control" id="totalPago" name="totalPago" disabled>
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
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <a href="Historial-venta"><button type="button" class="btn btn-primary">Ver ventas</button></a>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->

                        </div>
                    </div>
                    <div class="row mt-4">
                        <nav class="w-100">
                            <div class="nav nav-tabs" id="product-tab" role="tablist">
                                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripci&oacute;n</a>

                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><?php echo $descripcion; ?> </div>

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
</div>